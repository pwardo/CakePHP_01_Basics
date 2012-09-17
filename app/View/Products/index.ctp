<h1>Products</h1>

<table>
    <tr>
        <td>Product Name</td>
        <td>Created</td>
        <td>Modified</td>
    </tr>
    <?php foreach ($products as $product): ?>
    <tr>
        <td><?php echo $product['Product']['name']; ?></td>
        <td><?php echo $product['Product']['created']; ?></td>
        <td><?php echo $product['Product']['modified']; ?></td>
    </tr>
    
    <?php endforeach; ?>
</table>