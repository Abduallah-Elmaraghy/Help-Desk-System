<html>
<header>
    <title>New Case</title>
    <link rel="stylesheet" href="../style%20sheets/stylesheet.css">
</header>
<body>
    <?php include '../includes/navUser.php';?>
    <div class="New_Case_container">
        <div class="New_case">
            <h1>Escalation</h1>
            <form method="post">
                <div class="table_row">
                    <div class="table_col">
                        <label>Case number</label>
                        <label>Escalation reason</label>
                    </div>
                    <div class="table_col">
                        <input type="text">
                        <input type="text">
                    </div>
                    <div class="table_col">
                        <label>Recepient</label>
                    </div>
                    <div class="table_col">
                        <input type="text">
                    </div>
                </div>
                <label style="margin: 0 15px 0 15px;margin-left: 30px;padding:20px;">Description</label>
                <textarea type="text" style="width:60%;">
					</textarea><br>
                <div class="submit">
                    <input type="submit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>