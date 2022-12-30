<!-- <tablei>
    <tr>
      <th>
        Total Sales:
      </th>
    </tr>
    <tr>            
      <td></td>
    </tr>
  </tablei>
  <tablei>
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
        <h5 class="card-title text-center">total Items:(<?= $data->posts_count ?>)</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-2 my-5 pt-5">
    <div class="card">
      <div class="card-body" style="background-color: #F9D923;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
        <h5 class="card-title text-center">total users(<?= $data->user_count ?>)</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-2 my-5 pt-5">
    <div class="card">
      <div class="card-body" style="background-color: #36AE7C;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
        <h5 class="card-title text-center">بطيخ</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-2 my-5 pt-5">
    <div class="card">
      <div class="card-body" style="background-color: #187498;box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
        <h5 class="card-title text-center">شبس رينقو</h5>
      </div>
    </div>
  </div>



















<div style="background-color: #000000e8;" class="container w-75 mt-5">
<h2 class="text-center " style="color: #ffffff;"> Top five items</h2>
</div>
<hr style="overflow: visible; /* For IE */
    padding: 0;
    border: none;
    border-top: medium double #333;
    color: #333;
    text-align: center;">
<div class="row justify-content-between">
  <div class="col-sm-2 ml-4">
    <div class="card mb-3" style="border-radius: 30px;background-color: #EB5353e6">
      <div class="card-body" style="border-radius: 30px; ;border-radius: 30px; box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
        <h5 class="card-title text-center">تفاح</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card" style="border-radius: 30px;background-color: #F9D923e6">
      <div class="card-body" style="background-color: #F9D923;border-radius: 30px; box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
        <h5 class="card-title text-center">ليمون</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card" style="border-radius: 30px;background-color: #36AE7Ce6">
      <div class="card-body" style="background-color: #36AE7C;border-radius: 30px; box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
        <h5 class="card-title text-center">بطيخ</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card" style="border-radius: 30px;background-color: #187498e6">
      <div class="card-body" style="background-color: #187498;border-radius: 30px; box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
        <h5 class="card-title text-center">شبس رينقو</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card" style="border-radius: 30px;">
      <div class="card-body" style="background-color: 000;border-radius: 30px; box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
        <h5 class="card-title text-center">مستر شبس</h5>
      </div>
    </div>
  </div>
  <hr style="     border: 0;
  height: 0;
  box-shadow: 0 0 10px 1px black;">