<div class="span8">



    <h2 class="text-info" align="center">Add Data</h2>
    <?php   $this->load->helper('form');
    $attributes = array('class' => 'form-horizontal ');
    echo form_open('home/cmeta/addmeta', $attributes); ?>
<hr/></br></br>

            <input type="hidden" name="customerkey" value="<?php echo $customerkey; ?>">
            <input type="hidden" name="groupkey" value="<?php echo $groupkey; ?>">
            <div class="control-group">
                <label class="control-label" for="inputkey">Item</label>
                <div class="controls">
                    <input type="text"  name="key"  class="input-xlarge" id="inputkey" placeholder="Item">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="inputvalue">Value</label>
                <div class="controls">
                    <input type="text"  name="value"  class="input-xlarge" id="inputvalue" placeholder="Value">
                </div>
            </div>

            <p class="offset2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn">Reset</button>
            </p>
    </form>

</div>