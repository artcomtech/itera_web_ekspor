<style>
    /* COntainer center */
    .form__container {
        display: flex;
        justify-content: center;
        /* align-items: center; */
        height: 100vh;
        width: 1000%;
        margin-bottom: 30px;
    }

    .left__form__content{
        width: 60%;
        padding: 10px;
    }
    .right__form__content{
        width: 40%;
        padding: 15px;
    }


    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px auto;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        font-size: 12px;
    }

   
    th {
        background-color: #519872;
        color: #fff;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    .total-row {
        background-color: #f0f0f0;
        font-weight: bold;
    }

    input[type="number"] {
      padding: 8px;
      width: 50px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 13px;
      text-align: center;
      box-sizing: border-box;
      outline: none;
    }


    /* Optional: Add focus style */
    input[type="number"]:focus {
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .delete-button,
    .edit-button {
      padding: 6px 10px;
      font-size: 12px;
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 4px;
      outline: none;
    }

    .delete-button {
      background-color: #dc3545; /* Bootstrap danger color */
    }

    .edit-button {
      background-color: #007bff; /* Bootstrap primary color */
    }

    /* Hover styles */
    .delete-button:hover {
      background-color: #c82333; /* Darker red for hover */
    }

    .edit-button:hover {
      background-color: #0056b3; /* Darker blue for hover */
    }

       /* Alert */

    .alert {
        padding: 20px;
        margin: 15px;
        border-radius: 5px;
    }

    .success {
        background-color: #0fe942;
        color: #edf0ed;
        border: 1px solid #f3f6f3;
    }

    .closebtn-success {
        margin-left: 15px;
        color: #4CAF50;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn-success:hover {
        color: #205B35;
    }

    .danger {
        background-color: #f73e3e;
        color: #f59797;
        border: 1px solid #f3f6f3;
    }

    .closebtn-danger {
        margin-left: 15px;
        color: #cb1313;
        font-weight: bold;
        float: right;
        font-size: 17px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 8px;
    }

    input {
      padding: 12px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
    }

    textarea{
        padding: 12px;
        margin-bottom: 16px;
        border: 1px solid #ccc;
    }

    button {
      background-color: #519872;
      color: #fff;
      padding: 16px;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: #3B5249;
    }
</style>
<section class="section__container form__container" id="cart">

    <div class="left__form__content">
        <?php
            if(isset($_GET['stt'])) {
                if($_GET['stt'] == 'success') {
                  echo '<div class="alert success">
                  <strong>Success!</strong> '.$_GET['msg'].'.
                </div>';
                }
            }
        ?>
        <p class="section__subheader">CART</p>
        <h2 class="section__header" style="font-size: 14px;">List your products</h2>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th style="width: 160px;">#</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
    <div class="right__form__content">
        <p class="section__subheader">Transaction</p>
        <h2 class="section__header" style="font-size: 14px;">Please enter your details</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="country">Country:</label>
            <input type="text" id="country" name="country" required>

            <label for="post_code">Post Code:</label>
            <input type="text" id="post_code" name="post_code" required>

            <label for="post_code">Address:</label>
           <textarea>

           </textarea>
            

            <button type="submit">CHECKOUT</button>
        </form>
    </div>
</section>