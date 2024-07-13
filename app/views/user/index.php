<?php 
include_once 'app/views/includes/header.php';
?>

    <h2 style="text-align: center;"> Our users </h2>
    <div style="margin: 10px auto;">
        <a href="<?php APP_URL ?>/php-das/mvc/user/create">
            + Add user
        </a> 
    </div>
    <div style="display: flex; justify-content: center; align-items: center;">
<?php  
    if ($data->num_rows): 
?> 
    <table style="text-align: center;">
        <tr>
            <th>name</th>
            <th>surname</th>
            <th>age</th>
        </tr>
        <?php while ($row = $data->fetch_assoc()): ?>
            <tr data-id="<?php echo $row['id'] ?>">
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo htmlspecialchars($row['surname']); ?></td>
                <td><?php echo htmlspecialchars($row['age']); ?></td>
                <td>
                    <button class="deleteButton" data-id="<?php echo $row['id'] ?>"> 
                        Delete 
                    </button>
                </td>
                <td>
                    <a href="getUser/<?php echo($row['id'])?>">
                        Edit user
                    </a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
<?php endif; ?>
    
</div>
    

    <script>
        const deleteButtons = document.querySelectorAll(".deleteButton");
        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function() {
            const recordId = this.getAttribute('data-id');
            fetch(`http://localhost/php-das/mvc/user/delete/${recordId}`)
            .then(response => response.json())
            .then(resault => {if (resault['success']) {
                const row = document.querySelector(`tr[data-id='${recordId}']`);
                if (row) {
                    row.remove();
                } else {
                    console.log('row not found');
                }
            }});
        })
        });
    </script>
</body>
</html>