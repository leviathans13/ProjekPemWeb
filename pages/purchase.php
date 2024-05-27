<h1>Purchase a Motorcycle</h1>
<form action="process_purchase.php" method="post">
    <div class="form-group">
        <label for="name">Full Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="motorcycle">Motorcycle Model:</label>
        <select class="form-control" id="motorcycle" name="motorcycle">
            <option value="model1">Model 1</option>
            <option value="model2">Model 2</option>
            <!-- Add more options as needed -->
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
