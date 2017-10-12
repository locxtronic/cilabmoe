<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3>Item registration form</h3>
    </div>
    <div class="panel-body">
      <?php echo form_open("dashboard/insertItem"); ?>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Item Name</span>
          <input type="text" class="form-control" placeholder="E.g Tea" name="tbxItemName">
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Item Quantity</span>
          <input type="text" class="form-control" placeholder="E.g 100" name="tbxItemQuantity">
        </div>
        <br>
        <input type="Submit" class="btn btn-danger btn-block" value="Insert">
      </form>
    </div>
  </div>
</div>
