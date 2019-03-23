<div class="container mt-4">
    <div class="row">
       <div class="col-12 pb-2">
            <h1>Payment Management</h1>
            <div class="row">
                <div class="col-6">
                <label for="fitter">Select Pages</label>
                    <select name="fitter" id="fitter">
                        <option value="10">10</option>
                        <option value="10">15</option>
                        <option value="10">25</option>
                        <option value="10">50</option>
                    </select>
                </div>
                <div class="col-6">
                    <a href="#" class="btn btn-primary float-right">Make Payment</a>
                </div>
            </div>
       </div>
    </div>
    <table class="table table-bordered table-striped table-light table-hover">
        <thead class="bg-dark text-white">
            <tr>
                <th>Category</th>
                <th>Price</th>
                <th>Date</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($data['category_data'] as $rows){?>
            <tr>
                <td><?php echo $rows['catname']?></td>
                <td><?php echo $rows['price']?> Reils</td>
                <td><?php echo $rows['date_at']?> </td>
                <td><?php echo $rows['amount']?></td>
                <td><?php echo $rows['status']?></td>
                <td>
                    <a href="#" class="text-success"><i class="material-icons">create</i></a>
                    <a href="#" class="text-danger"><i class="material-icons">delete</i></a>
                    <a href="#" class="text-info"><i class="material-icons">visibility</i></a>
                </td>
            </tr>
        <?php }?>
        </tbody>
        <tfoot class="bg-secondary text-center text-white">
            <tr>
                <td colspan="4"><h4>4000000 Reils</h4></td>
                <td colspan="2"><h4>Total</h4></td>
            </tr>
        </tfoot>
    </table>
</div>
