<style>
    /* COntainer center */
    .transaction__container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 80%;
    }

    .transaction__content {
        width: 100%;
    }

    .buying-history {
        list-style: none;
        padding: 0;
    }

    .buying-history li {
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        margin-bottom: 10px;
        padding: 15px;
        display: flex;
        justify-content: space-between;
    }

    .transaction-date,
    .transaction-description,
    .transaction-amount {
        flex: 1;
    }

    .transaction-date {
        text-align: left;
    }

    .transaction-description {
        text-align: center;
    }

    .transaction-amount {
        text-align: right;
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
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }
</style>
<section class="section__container transaction__container" id="cart">

    <div class="transaction__content">
        <?php
        if (isset($_GET['stt'])) {
            if ($_GET['stt'] == 'success') {
                echo '<div class="alert success">
                  <strong>Success!</strong> ' . $_GET['msg'] . '.
                </div>';
            }
        }
        ?>
        <p class="section__subheader">Transaction</p>
        <h2 class="section__header">List your transaction</h2>
        <ul class="buying-history">
            <li>
                <span class="transaction-date">2024-02-26</span>
                <span class="transaction-description">Product A</span>
                <span class="transaction-amount">$19.99</span>
            </li>
            <li>
                <span class="transaction-date">2024-02-25</span>
                <span class="transaction-description">Product B</span>
                <span class="transaction-amount">$29.99</span>
            </li>
            <!-- Add more transactions as needed -->
        </ul>
    </div>
</section>