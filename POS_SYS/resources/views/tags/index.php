<div class="container w-75" style="background-color: #000000d4;">
  <h1 class="text-center" style="color: white;">Silling</h1>
</div>
<div class>
  <form id="submit_form" class="my-4 d-flex justify-content-between input-form">

    <input type="hidden" id="user_id" name="user_id" value="<?= $data->user ?>">

    <div class="input-group flex-nowrap me-2">

      <select id="items_id" class="form-select" aria-label="Default select example" name="items_id">

        <option selected>Select One Of The Items</option>
        <?php foreach ($data->posts as $post) :

          //  $name=array();

          // if(!in_array($post->title,$name) && $item->quantity > 0 ){


          //     $name[]= $item->item_name;
        ?>

          <option value="<?= $post->id ?>"><?= $post->name ?></option>

        <?php endforeach ?>



      </select>

    </div>



    <div class="input-group flex-nowrap ms-2">

      <input id="quantity" type="number" class="form-control" placeholder="Enter the quantity" aria-describedby="addon-wrapping" min="0" name="quantity">

    </div>



    <button id="will" class="btn btn-outline-info ms-2">Add</button>



  </form>
</div>

<hr>
<div id="transaction_data">

  <h2 class="text-center m-auto m-5">Transactions</h2>

  <hr>



  <table class="table">

    <thead class="thead-dark">

      <tr>

        <th scope="col" class="text-center">transaction id</th>

        <th scope="col" class="text-center"> item id</th>
        <th scope="col" class="text-center"> item name</th>

        <th scope="col" class="text-center"> quantity</th>

        <th scope="col" class="text-center"> Unit price</th>

        <th scope="col" class="text-center"> total</th>



        <th scope="col" class="text-center">created at</th>

        <th scope="col" class="text-center">updated at</th>

        <th scope="col" class="text-center">Action</th>

      </tr>

    </thead>

    <tbody id="transactions">



    </tbody>

  </table>



</div>
