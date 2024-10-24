<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <style>
        table {
            width: 75%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Inventory Management System</h1>

    <?php

    // Inventory as an associative array

    $inventory = [];

    // 1. Function to add an item to the inventory

    function addItem(&$inventory, $name, $price, $quantity, $category) {
        $inventory[] = [
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity,
            'category' => $category
        ];
    }

    // 2. Function to remove an item from the inventory

    function removeItem(&$inventory, $name) {
        foreach ($inventory as $key => $item) {
            if ($item['name'] === $name) {
                unset($inventory[$key]);
                return true;
            }
        }
        return false;
    }

    // 3. Function to update the quantity of an item
    function updateQuantity(&$inventory, $name, $newQuantity) {
        foreach ($inventory as &$item) {
            if ($item['name'] === $name) {
                $item['quantity'] = $newQuantity;
                return true;
            }
        }
        return false;
    }

    // 4. Function to search for an item by name
    function searchItem($inventory, $name) {
        foreach ($inventory as $item) {
            if ($item['name'] === $name) {
                return $item;
            }
        }
        return null;
    }

    // 5. Function to display inventory items in a table
    function viewInventory($inventory) {
        echo "<table>";
        echo "<tr><th>Item</th><th>Price (₱)</th><th>Quantity</th><th>Category</th></tr>";
        foreach ($inventory as $item) {
            echo "<tr>
                    <td>{$item['name']}</td>
                    <td>₱{$item['price']}</td>
                    <td>{$item['quantity']}</td>
                    <td>{$item['category']}</td>
                  </tr>";
        }
        echo "</table>";
    }

    // 6. Function to calculate the total value of the inventory
    function calculateTotalValue($inventory) {
        $totalValue = 0;
        foreach ($inventory as $item) {
            $totalValue += $item['price'] * $item['quantity'];
        }
        return $totalValue;
    }

    // 7. Function to sort items by price (ascending)
    function sortByPrice(&$inventory) {
        usort($inventory, function($a, $b) {
            return $a['price'] <=> $b['price'];
        });
    }

    // 8. Function to filter items by category

    function filterByCategory($inventory, $category) {
        $filtered = [];
        foreach ($inventory as $item) {
            if ($item['category'] === $category) {
                $filtered[] = $item;
            }
        }
        return $filtered;
    }

    // 9. Function to display the most expensive item

    function mostExpensiveItem($inventory) {
        $max = null;
        foreach ($inventory as $item) {
            if ($max === null || $item['price'] > $max['price']) {
                $max = $item;
            }
        }
        return $max;
    }

    // 10. Function to display the least expensive item

    function leastExpensiveItem($inventory) {
        $min = null;
        foreach ($inventory as $item) {
            if ($min === null || $item['price'] < $min['price']) {
                $min = $item;
            }
        }
        return $min;
    }

    // Example usage of the functions:

    // Adding items to the inventory
    addItem($inventory, "Apple", 55.00, 100, "Fruit"); // Price in PHP
    addItem($inventory, "Banana", 25.00, 150, "Fruit");
    addItem($inventory, "Orange", 60.00, 80, "Fruit");
    addItem($inventory, "Shampoo", 250.00, 20, "Personal Care");
    addItem($inventory, "Toothpaste", 100.00, 30, "Personal Care");

    // Updating quantity of an item
    updateQuantity($inventory, "Banana", 200);

    // Viewing the inventory
    echo "<h2>Current Inventory</h2>";
    viewInventory($inventory);

    // Displaying the total value of the inventory
    echo "<h2>Total Value of Inventory: </h2>";
    echo "Total Value: ₱" . calculateTotalValue($inventory) . "<br>";

    // Sorting items by price
    sortByPrice($inventory);
    echo "<h2>Inventory Sorted by Price </h2>";
    viewInventory($inventory);

    // Filtering by category
    echo "<h2>Filtered Items: Category: Fruit </h2>";
    $filteredItems = filterByCategory($inventory, "Fruit");
    viewInventory($filteredItems);

    // Displaying the most and least expensive items
    echo "<h2>Most Expensive Item</h2>";
    $mostExpensive = mostExpensiveItem($inventory);
    echo "Item: {$mostExpensive['name']} <br> Price: ₱{$mostExpensive['price']}<br>";

    echo "<h2>Least Expensive Item</h2>";
    $leastExpensive = leastExpensiveItem($inventory);
    echo "Item: {$leastExpensive['name']} <br> Price: ₱{$leastExpensive['price']}<br>";
    ?>

<a href="javascript:void(0);" onclick="closeAndGoBack()">Back to Main Page</a>

<script>
    function closeAndGoBack() {
        window.close(); 
        window.location.href = "index.php";
    }
</script>

</body>
</html>
