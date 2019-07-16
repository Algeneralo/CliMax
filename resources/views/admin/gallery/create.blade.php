@extends('admin.layout')
@section('style')
    <style>
        textarea {
            resize: none;
            height: 150px;
        }

        .avatar-upload .avatar-preview {
            height: 300px;
        }

        .dropzone {
            border: 2px dashed rgba(59, 62, 71, .3) !important;
        }

        .select-error {
            border-color: #a94442;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
@endsection
@section('body')
    <div class="card-box"><h4 class="header-title m-t-0 mb-3">Clients</h4>
        <div class="row">
            <p class="col-12">
                <b>Note:</b>You can upload multiple files,but it must be of the same type
            </p>
            <div class="col-3">
                <select class="form-control mb-3" required>
                    <option selected disabled>File Group</option>
                    <option value="video">Video</option>
                    <option value="all">All</option>
                    <option value="design">Design</option>
                    <option value="photos">Photos</option>
                </select>
            </div>
            <div class="col-10 offset-1">
                <form action="{{route('gallery.store')}}" id="myDropzone" class="dropzone" method="post">
                    @csrf
                    <div id="myId" class="fallback">
                        <input name="image_file" type="file" multiple/>
                    </div>
                </form>
            </div>
        </div>
        <div class="row text-center mt-3">
            <div class="col-12">
                <button class="btn btn-success upload-btn" type="submit">Upload</button>
                {{--<a href="{{route('clients.index')}}" class="btn btn-danger" type="submit">Cancel</a>--}}

            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script>
        let acceptedImageTypes = ["image/png", "image/jpg", "image/jpeg"];
        let acceptedVideoTypes = ["video/mp4", "video/mk4", "video/flv", "video/wmv"];
        let dropZone = null;
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            parallelUploads: 10,
            timeout: 100000,
            init: function () {
                dropZone = this;
                this.on("complete", function (file) {

                });
                this.on("addedfile", function (file) {
                    if (!$("select").val()) {
                        sweetAlert("You have to choose file type!", '', 'error');
                        $("select").addClass("select-error");
                        this.removeFile(file);
                        return false;
                    } else {
                        $("select").removeClass("select-error");
                        return true;
                    }
                });
                //add file type{photos,video.....} with dropzone form sender
                this.on('sending', function (file, xhr, formData) {
                    formData.append('type', $("select").val());
                });
                this.on("error", function (file, errormessage, xhr) {
                    if (xhr) {
                        var response = JSON.parse(xhr.responseText);
                        console.log(response.message);
                    }
                });
            },
            addRemoveLinks: true,
            accept: function (file, done) {
                //check if uploaded file is video, and user select a photo or vice versa
                if (acceptedVideoTypes.includes(file.type.toLowerCase() && $('select').val() !== "video")) {
                    this.removeFile(file);
                    sweetAlert("You have to upload Image files only", '', 'error');
                    $("select").addClass("select-error");
                }
                //check if uploaded file is image, and selected file type is video
                else if (acceptedImageTypes.includes(file.type.toLowerCase()) && $('select').val() === "video") {
                    this.removeFile(file);
                    sweetAlert("You have to upload video files only", '', 'error');
                    $("select").addClass("select-error");
                }
                //if files is accepted, then upload it
                else if (acceptedVideoTypes.includes(file.type.toLowerCase()) || acceptedImageTypes.includes(file.type.toLowerCase())) {
                    done();
                }
                //reject any other files type
                else {
                    this.removeFile(file);
                    sweetAlert("Please upload valid file", '', 'error');
                }
            },
            success: function (file, response) {
                console.log(response);
                if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
                    this.removeAllFiles(true);
                    Swal.fire({
                        title: 'All files uploaded successfully <br>Do you want to upload more?',
                        text: "",
                        type: 'success',
                        showCancelButton: true,
                        confirmButtonColor: '#001cd6',
                        cancelButtonColor: '#5bc0de',
                        confirmButtonText: 'Yes',
                        cancelButtonText: 'No'
                    }).then((result) => {
                        if (result.value) {

                        } else {
                            window.location = "{{route("gallery.index")}}"
                            // window.location = "/admin"
                        }
                    })
                } else if (this.getQueuedFiles().length > 0) {
                    this.processQueue();
                }
            }

        };

        $("select").on("change", function () {
            dropZone.removeAllFiles(true);
        });
        $(".upload-btn").on("click", function () {
            dropZone.processQueue();
        })
    </script>

@endsection