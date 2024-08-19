<?php
session_start();
include("connect.php");

?>

// index.html
<!DOCTYPE html>
<html>

<head>
    <title>Expense Tracker</title>
    <link rel="stylesheet" type="text/css" href="style.css" />

    <style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"poppins",sans-serif;
}
body{
    background-color: #c9d6ff;
    background:linear-gradient(to right,#e2e2e2,#c9d6ff);
}
.container{
    background:#fff;
    width:450px;
    padding:1.5rem;
    margin:50px auto;
    border-radius:10px;
    box-shadow:0 20px 35px rgba(0,0,1,0.9);
}
form{
    margin:0 2rem;
}
.form-title{
    font-size:1.5rem;
    font-weight:bold;
    text-align:center;
    padding:1.3rem;
    margin-bottom:0.4rem;
}
input{
    color:inherit;
    width:100%;
    background-color:transparent;
    border:none;
    border-bottom:1px solid #757575;
    padding-left:1.5rem;
    font-size:15px;
}
.input-group{
    padding:1% 0;
    position:relative;

}
.input-group i{
    position:absolute;
    color:black;
}
input:focus{
    background-color: transparent;
    outline:transparent;
    border-bottom:2px solid hsl(327,90%,28%);
}
input::placeholder{
    color:transparent;
}
label{
    color:#757575;
    position:relative;
    left:1.2em;
    top:-1.3em;
    cursor:auto;
    transition:0.3s ease all;
}
input:focus~label,input:not(:placeholder-shown)~label{
    top:-3em;
    color:hsl(327,90%,28%);
    font-size:15px;
}
.recover{
    text-align:right;
    font-size:1rem;
    margin-bottom:1rem;

}
.recover a{
    text-decoration:none;
    color:rgb(125,125,235);
}
.recover a:hover{
    color:blue;
    text-decoration:underline;
}
.btn{
    font-size:1.1rem;
    padding:8px 0;
    border-radius:5px;
    outline:none;
    border:none;
    width:100%;
    background:rgb(125,125,235);
    color:white;
    cursor:pointer;
    transition:0.9s;
}
.btn:hover{
    background:#07001f;
}
.or{
    font-size:1.1rem;
    margin-top:0.5rem;
    text-align:center;
}
.icons{
    text-align:center;
}
.icons i{
    color:rgb(125,125,235);
    padding:0.8rem 1.5rem;
    border-radius:10px;
    font-size:1.5rem;
    cursor:pointer;
    border:2px solid #dfe9f5;
    margin:0 15px;
    transition:1s;
}
.icons i:hover{
    background:#07001f;
    font-size:1.6rem;
    border:2px solid rgb(125,125,235);
}
.links{
    display:flex;
    justify-content:space-around;
    padding:0 4rem;
    margin-top:0.9rem;
    font-weight:bold;
}
button{
    color:rgb(125,125,235);
    border:none;
    background-color:transparent;
    font-size:1rem;
    font-weight:bold;
}
button:hover{
    text-decoration:underline;
    color:blue;
}
    </style>
</head>

<body>
    <div class="container">
        <h1>Expense Tracker</h1>
        <form id="expense-form">
            <input type="text" id="expense-name" placeholder="Expense Name" required />
            <input type="number" id="expense-amount" placeholder="Amount" required />
            <select id="expense-category" required>
                <option value="" disabled selected>Select Category</option>
                <option value="Food">Food</option>
                <option value="Transport">Transport</option>
                <option value="Entertainment">Entertainment</option>
                <option value="Other">Other</option>
            </select>
            <input type="date" id="expense-date" required />
            <button type="submit">Add Expense</button>
        </form>
        <div class="expense-table">
            <table>
                <thead>
                    <tr>
                        <th>Expense Name</th>
                        <th>Amount</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="expense-list"></tbody>
            </table>
            <div class="total-amount">
                <strong>Total:</strong> $<span id="total-amount">0</span>
            </div>
        </div>
        <div class="filter">
            <label for="filter-category">Filter by Category:</label>
            <select id="filter-category">
                <option value="All">All</option>
                <option value="Food">Food</option>
                <option value="Transport">Transport</option>
                <option value="Entertainment">Entertainment</option>
                <option value="Other">Other</option>
            </select>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>
