<h2>Kontakty</h2>
<?php
    $contact_object = new Contact();
    $contacts = $contact_object->select();
    if(isset($_POST['delete_contact'])){
        $contact_id = $_POST['delete_contact'];
        $contact_object->delete();
        header('Location: admin.php');
        exit();
    }
    echo '<table class="admin-table">';
    echo '<tr><th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Delete</th>
               
            </tr>';
    foreach($contacts as $c){
        echo '<tr>';
        echo '<td>'.$c->name;'</td>';
        echo '<td>'.$c->email;'</td>';
        echo '<td>'.$c->message;'</td>';
       
        echo '<td>
                <form action="" method="POST">
                    <button type="submit" name="delete_contact" value="'.$c->id.'"'.'>Vymazať</button>
                </form>
                </td>';
        
        echo '</tr>';
    }
        
    echo '</table>';
?>