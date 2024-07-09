<?php 
include_once 'app/views/includes/header.php';
?>

    <h1>index.php user</h1>
    <a href="<?php APP_URL ?>/php-das/mvc/user/create"> Add user </a>
    <?php 

    
 if ($data->num_rows): ?>
    <table>
        <tr>
            <th>name</th>
            <th>surname</th>
            <th>age</th>
            <th>delete</th>
        </tr>
        <?php while ($row = $data->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo htmlspecialchars($row['surname']); ?></td>
                <td><?php echo htmlspecialchars($row['age']); ?></td>
                <td>
                    <form action="delete" method="post">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
                        <button type="submit">delete</button>
                    </form>
                </td>
                <td>
                    <a href="edit/<?php echo($row['id'])?>">
                        some link
                    </a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
<?php endif; ?>
    

    

    <!-- user table -->
    <!-- <table>
        <tr>
            <th>
                name
            </th>
            <th>
                surname
            </th>
            <th>
                age
            </th>
        </tr>
        <tr>
            <td>
                Armen
            </td>
            <td>
                Paravyan
            </td>
            <td>
                33
            </td>
        </tr>
        <tr>
            <td>
                Aram
            </td>
            <td>
                Mesropyan
            </td>
            <td>
                41
            </td>
        </tr>
        <tr>
            <td>
                Ani
            </td>
            <td>
                Hovhannisyan
            </td>
            <td>
                28
            </td>
        </tr>
    </table> -->
</body>
</html>