<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>


    @yield('content');
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</body>

</html>
<script>
    $(document).ready(function() {
        $('#note_add_form').validate({
            rules: {
                note_title: {
                    required: true,
                    minlength: 3,
                },
                note_content: {
                    required: true,
                }
            },
            messages: {

                note_title: {
                    required: "<p class='text-capitalize fw-bold' style='color:red'>Please enter the title for note.</p>",
                    minlength: "<p class='text-capitalize fw-bold' style='color:red'>Please enter atleast 3 charecters.</p>",
                },
                note_content: {
                    required: "<p class='text-capitalize fw-bold' style='color:red'>Please enter the content</p>",
                }
            },
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#note_edit_form').validate({
            rules: {
                note_title: {
                    required: true,
                    minlength: 3,
                },
                note_content: {
                    required: true,
                }
            },

            messages: {

                note_title: {
                    required: "<p class='text-capitalize fw-bold' style='color:red'>Please enter the title for note.</p>",
                    minlength: "<p class='text-capitalize fw-bold' style='color:red'>Please enter atleast 3 charecters.</p>",
                },
                note_content: {
                    required: "<p class='text-capitalize fw-bold' style='color:red'>Please enter the content</p>",
                }
            },
        });
    });
</script>