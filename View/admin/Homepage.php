<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="..\style sheets\stylesheet.css">
    <link rel="stylesheet" href="..\style sheets\test.css">
</head>

<body>
    <?php 
		include "../includes/navAdmin.php";
		?>
    <h3 style="margin-left: 100px;">Pending Cases</h3>
    <div class="pending_cases">
        <div class="triangle-left"></div>
        <div class="card">
            <img src="../../recent%20cases.png">
            <div class="card_body">
                <h4>Case number :</h4>
                <h4>Status :</h4>
                <input type="submit" value="Open">
            </div>
        </div>
        <div class="card">
            <img src="../../recent%20cases.png">
            <div class="card_body">
                <h4>Case number :</h4>
                <h4>Status :</h4>
                <input type="submit" value="Open">
            </div>
        </div>
        <div class="card">
            <img src="../../recent%20cases.png">
            <div class="card_body">
                <h4>Case number :</h4>
                <h4>Status :</h4>
                <input type="submit" value="Open">
            </div>
        </div>
        <div class="triangle-right"></div>
    </div>
    <div class="viewcases">
        <h1 Style="margin-left:650px">Quick access</h1>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Cases..">

        <table id="customers">
            <tr>
                <th>Case-Number</th>
                <th>Sevirity</th>
                <th>Pirority</th>
                <th>Due date</th>
                <th></th>
              	</tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
                <td>Germany</td>
                <td><a href="">Open</a></td>
            </tr>
            <tr>
                <td>Berglunds snabbköp</td>
                <td>Christina Berglund</td>
                <td>Sweden</td>
                <td>Sweden</td>
                <td><a href="#">Open</a></td>

            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>Francisco Chang</td>
                <td>Mexico</td>
                <td>Mexico</td>
                <td><a href="#">Open</a></td>

            </tr>
            <tr>
                <td>Ernst Handel</td>
                <td>Roland Mendel</td>
                <td>Austria</td>
                <td>Austria</td>
                <td><a href="#">Open</a></td>

            </tr>
            <tr>
                <td>Island Trading</td>
                <td>Helen Bennett</td>
                <td>UK</td>
                <td>UK</td>
                <td><a href="#">Open</a></td>

            </tr>
            <tr>
                <td>Königlich Essen</td>
                <td>Philip Cramer</td>
                <td>Germany</td>
                <td>Germany</td>
                <td><a href="#">Open</a></td>

            </tr>
            <tr>
                <td>Paris spécialités</td>
                <td>Marie Bertrand</td>
                <td>France</td>
                <td>France</td>
                <td><a href="#">Open</a></td>

            </tr>
        </table>
    </div>
</body>

</html>

<script>
function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("customers");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        td1 = tr[i].getElementsByTagName("td")[1];
        td2 = tr[i].getElementsByTagName("td")[2];
        td3 = tr[i].getElementsByTagName("td")[3];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
//   else if (td1) {
//     txtValue = td1.textContent || td1.innerText;
//     if (txtValue.toUpperCase().indexOf(filter) > -1) {
//       tr[i].style.display = "";
//     } else {
//       tr[i].style.display = "none";
//     }
//   }
//   else if (td2) {
//     txtValue = td2.textContent || td2.innerText;
//     if (txtValue.toUpperCase().indexOf(filter) > -1) {
//       tr[i].style.display = "";
//     } else {
//       tr[i].style.display = "none";
//     }
//   }
//   else if (td3) {
//     txtValue = td3.textContent || td3.innerText;
//     if (txtValue.toUpperCase().indexOf(filter) > -1) {
//       tr[i].style.display = "";
//     } else {
//       tr[i].style.display = "none";
//     }
//   }
// }
//}
</script>