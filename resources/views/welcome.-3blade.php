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

<!-- Modal for popup -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Auto Popup</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>This is an auto-popup in Laravel.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Check if the modal has not been shown before
    if (!localStorage.getItem('modalShown')) {
        setTimeout(function () {
            $('#myModal').modal('show');
            // Set a local storage value to indicate the modal has been shown
            localStorage.setItem('modalShown', 'true');
        }, 3000);
    }
</script>

</body>
</html>
