<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    // Include the header.html file
    include('header.html');
    ?>
</head>

<body>
    <?php
    // Include the navbar.html file
    include('navbar.html');
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Archaeodash</h5>
                        <p class="card-text">Application for the analysis of elemental data</p>
                        <a href="/app/Archaeodash/" class="btn btn-primary">Go to Archaeodash</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Barcodes</h5>
                        <p class="card-text">App to generate barcodes</p>
                        <a href="/app/barcodes/" class="btn btn-primary">Go to barcodes</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Shiny Data Entry</h5>
                        <p class="card-text">Application for data entry using a shiny app. Typically used for
                            cataloguing.</p>
                        <a href="/app/ShinyDataEntry/" class="btn btn-primary">Go to Shiny Data Entry</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Boxes</h5>
                        <p class="card-text">Application used for updating box locations in Collective Access.</p>
                        <a href="/app/boxes/" class="btn btn-primary">Go to Boxes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    // Include the footer.html file
    include('footer.html');
    ?>
</body>

</html>