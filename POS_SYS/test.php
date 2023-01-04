<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="container my-5">
    <div class="d-flex justify-content-between">
        <h1 style="color: white;">HTU POS System</h1>
        <div style="background-color: #020228cc;">
            <strong style="color: white;" class="fs-1">Total Sales</strong>
            <span id="total-sales" class="fs-1" style="color: white;">0</span>
        </div>
    </div>
    <hr>

    <form id="userInputContainer" class="my-4 d-flex justify-content-between">

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Items</span>
            <select id="items" class="form-select" aria-label="Default select example">
                <option selected>Select One Of The Items</option>
                <option value="Coffee">Coffee</option>
                <option value="Tea">Tea</option>
                <option value="Chips">Chips</option>
                <option value="Snickers">Snickers</option>
                <option value="Milk">Milk</option>
            </select>
        </div>

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Quantity</span>
            <input id="quantity" type="number" class="form-control" aria-describedby="addon-wrapping" min="0">
        </div>

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Price (JOD)</span>
            <input id="price" type="number" class="form-control" aria-describedby="addon-wrapping" min="0">
        </div>

        <button id="add-item" class="btn btn-success">Add</button>

    </form>



    <div id="dataTableContainer">


        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" style="color: white;">#</th>
                    <th scope="col" style="color: white;">Item</th>
                    <th scope="col" style="color: white;">Quantity</th>
                    <th scope="col" style="color: white;">Price Per Unit</th>
                    <th scope="col" style="color: white;">Total</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>


    </div>















    ----------------------------------------------------


