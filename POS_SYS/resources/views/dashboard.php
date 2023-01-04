  <!-- <tablei>
    <tr>
      <th>
        total transaction
      </th>
    </tr>
    <tr>
    <?php foreach ($data->transactions as $transaction) : ?>            
      <td><?= $transaction->total ?></td>
      <?php endforeach ?>
    </tr>
  </tablei> -->

<div class="row justify-content-between">
    <div class="col-sm-2 ml-4 my-5 pt-5">
        <div class="card mb-3">
            <div class="card-body" style="background-color: #EB5353;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
                <h5 class="card-title text-center">total Items:(<?= $data->items_count ?>)</h5>
            </div>
        </div>
    </div>
    <div class="col-sm-2 my-5 pt-5">
        <div class="card">
            <div class="card-body" style="background-color: #F9D923;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
                <h5 class="card-title text-center">total Userss: (<?= $data->user_count ?>)</h5>
            </div>
        </div>
    </div>
    <div class="col-sm-2 my-5 pt-5">
        <div class="card">
            <div class="card-body" style="background-color: #36AE7C;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
                <h5 class="card-title text-center">transactions: (<?= $data->transactions_count ?>)</h5>
            </div>
        </div>
    </div>
    <div class="col-sm-2 my-5 pt-5">
        <div class="card">
            <div class="card-body" style="background-color: #187498;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
                <h5 class="card-title text-center">total sales: (<?= $transaction->total ?>)</h5>
            </div>
        </div>
    </div>




<!-- ----------------------------------- -->




    <table class="table table-dark table-hover w-75 m-auto">
  <thead>
    <tr>
      <th scope="col">item id</th>
      <th scope="col">item name</th>
      <th scope="col">price</th>
      <th scope="col">cost</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($data->top_five as $top_fives) : ?>            
    <tr>
      <th scope="row"><?php echo $top_fives['id']?></th>
      <td><?php echo $top_fives['name']?></td>
      <td><?php echo $top_fives['silling_price']?></td>
      <td><?php echo $top_fives['cost']?></td>
      <?php endforeach ?>
    </tr>