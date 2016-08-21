<?php if ($showForm) : ?>
<form>
    <div class="form-group">
        <label for="brand">Brand</label>
        <select class="form-control" id="brand" name="brand">
            <option>Please select a brand</option>
            <?php foreach ($brands as $brand) : ?>
            <option value="<?php echo $brand->id; ?>"<?php echo $brand->id == $selectedBrand ? ' selected' : ''; ?>><?php echo $brand->name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php endif; ?>