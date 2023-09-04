<?php
require_once "db_connection.php";

if (isset($_GET["action"]) && $_GET["action"] == "delete") {
    $id = $_GET["Patient_id"] ?? '';
    $id = mysqli_real_escape_string($con, $id);
    $query = "DELETE FROM patient WHERE Patient_ID = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 's', $id);
    $result = mysqli_stmt_execute($stmt);
    if (!empty($result))
        showPatients(0);
}

if (isset($_GET["action"]) && $_GET["action"] == "edit") {
    $id = $_GET["Patient_ID"];
    showEditOptionsRow($id);
}

if (isset($_GET["action"]) && $_GET["action"] == "update") {
    $id = $_GET["Patient_ID"];
    $first_name = $_GET["Firstname"];
    $last_name = $_GET["Lastname"];
    $nic_no = $_GET["Nic_No"];
    $email = $_GET["Email"];
    $mobile_no = $_GET["Mobile_No"];
    $user_name = $_GET["User_Name"];
    $password = $_GET["Password"];
    $address = $_GET["Address"];
    updatePatient($id, $first_name, $last_name, $nic_no, $email, $mobile_no, $user_name, $password, $address);
}

if (isset($_GET["action"]) && $_GET["action"] == "cancel")
    showPatients(0);

if (isset($_GET["action"]) && $_GET["action"] == "search")
    searchPatient(strtoupper($_GET["text"]));

    function showPatients($id)
    {
        global $con;
    
        if ($con) {
            $query = "SELECT * FROM patient";
            $result = mysqli_query($con, $query);
    
            $displayedIds = array(); // Array to store displayed patient IDs
    
            while ($row = mysqli_fetch_array($result)) {
                if ($row['Patient_ID'] == $id) {
                    showEditOptionsRow($row);
                    $displayedIds[] = $id; // Add the displayed patient ID to the array
                } elseif (!in_array($row['Patient_ID'], $displayedIds)) {
                    showPatientRow($row);
                    $displayedIds[] = $row['Patient_ID']; // Add the displayed patient ID to the array
                }
            }
        }
    }
    
function showPatientRow($row)
{
    ?>
    <tr>
        <td><?php echo $row['Patient_ID']; ?></td>
        <td><?php echo $row['Firstname']; ?></td>
        <td><?php echo $row['Lastname']; ?></td>
        <td><?php echo $row['Email']; ?></td>
        <td><?php echo $row['Mobile_No']; ?></td>
        <td><?php echo $row['Nic_No']; ?></td>
        <td><?php echo $row['User_Name']; ?></td>
        <td><?php echo $row['Password']; ?></td>
        <td><?php echo $row['Address']; ?></td>
        <td>
            <button href="" class="btn btn-info btn-sm"
                    onclick="editPatient(<?php echo $row['Patient_ID']; ?>);">
                <i class="fa fa-pencil"></i>
            </button>
            <button class="btn btn-danger btn-sm"
                    onclick="deletePatient(<?php echo $row['Patient_ID']; ?>);">
                <i class="fa fa-trash"></i>
            </button>
        </td>
    </tr>
    <?php
}

function showEditOptionsRow($id)
{
    global $con;
    $query = "SELECT * FROM patient WHERE Patient_ID = '$id'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    ?>
    <tr>
        <td><?php echo $row['Patient_ID']; ?></td>
        <td>
            <input type="text" class="form-control" name="Firstname"
                   id="editFirstname<?php echo $row['Patient_ID']; ?>"
                   value="<?php echo $row['Firstname']; ?>">
        </td>
        <td>
            <input type="text" class="form-control" name="Lastname"
                   id="editLastname<?php echo $row['Patient_ID']; ?>"
                   value="<?php echo $row['Lastname']; ?>">
        </td>
        <td>
            <input type="text" class="form-control" name="Email"
                   id="editEmail<?php echo $row['Patient_ID']; ?>"
                   value="<?php echo $row['Email']; ?>">
        </td>
        <td>
            <input type="text" class="form-control" name="Mobile_No"
                   id="editMobile_No<?php echo $row['Patient_ID']; ?>"
                   value="<?php echo $row['Mobile_No']; ?>">
        </td>
        <td>
            <input type="text" class="form-control" name="Nic_No"
                   id="editNic_No<?php echo $row['Patient_ID']; ?>"
                   value="<?php echo $row['Nic_No']; ?>">
        </td>
        <td>
            <input type="text" class="form-control" name="User_Name"
                   id="editUser_Name<?php echo $row['Patient_ID']; ?>"
                   value="<?php echo $row['User_Name']; ?>">
        </td>
        <td>
            <input type="text" class="form-control" name="Password"
                   id="editPassword<?php echo $row['Patient_ID']; ?>"
                   value="<?php echo $row['Password']; ?>">
        </td>
        <td>
            <input type="text" class="form-control" name="Address"
                   id="editAddress<?php echo $row['Patient_ID']; ?>"
                   value="<?php echo $row['Address']; ?>">
        </td>
        <td>
            <button class="btn btn-success btn-sm"
                    onclick="updatePatient(<?php echo $row['Patient_ID']; ?>);">
                <i class="fa fa-check"></i>
            </button>
            <button class="btn btn-danger btn-sm" onclick="cancelUpdate();">
                <i class="fa fa-times"></i>
            </button>
        </td>
    </tr>
    <?php
}

function updatePatient($id, $first_name, $last_name, $nic_no, $email, $mobile_no, $user_name, $password, $address)
{
    global $con;

    if ($con) {
        $stmt = $con->prepare("UPDATE patient SET Firstname = ?, Lastname = ?, Nic_No = ?, Email = ?, Mobile_No = ?, User_Name = ?, Password = ?, Address = ? WHERE Patient_ID = ?");
        $stmt->bind_param("ssssisssi", $first_name, $last_name, $nic_no, $email, $mobile_no, $user_name, $password, $address, $id);
        $stmt->execute();
        $stmt->close();

        
    }
}

function searchPatient($text)
{
    global $con;
    if ($con) {
        $query = "SELECT * FROM patient WHERE CONCAT(Firstname, ' ', Lastname) LIKE '%$text%'";
        $result = mysqli_query($con, $query);

        $displayedIds = array(); // Array to store displayed patient IDs

        while ($row = mysqli_fetch_array($result)) {
            showPatientRow($row);
            $displayedIds[] = $row['Patient_ID']; // Add the displayed patient ID to the array
        }
    }
}
?>
