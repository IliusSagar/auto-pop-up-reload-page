<!DOCTYPE html>
<html>
<head>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Bootstrap CSS and JavaScript (for modal) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Your content -->
<h1>Hello, world!</h1>

<!-- Include the popup -->
@include('popup')

<!-- Modal for popup -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Popup Title</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!-- Content of your popup goes here -->
                This is your popup content.
            </div>
        </div>
    </div>
</div>

<script>
    // Automatically show the modal after a delay (e.g., 3 seconds)
    setTimeout(function () {
        $('#myModal').modal('show');
    }, 3000); // 3000 milliseconds (3 seconds)
</script>

</body>
</html>
