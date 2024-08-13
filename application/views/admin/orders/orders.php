<!--**********************************Header & sidebar start***********************************-->
<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');
?>
<!--**********************************Header & sidebar end***********************************-->
<!--**********************************Content body start****************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Orders Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example3_wrapper" class="dataTables_wrapper1 no-footer">
                                <div class="dateRangeData">
                                    <!-- <form action="#" method="POST">
                                        <div class="form-control">
                                            <label for="">From Date</label>
                                            <input type="date" name="fromdate">
                                        </div>
                                        <div class="form-control">
                                            <label for="">To Date</label>
                                            <input type="date" name="todate">
                                        </div>
                                        <button class="btn btn-success">Export</button>
                                    </form> -->
                                </div>
                                <table id="example66" class="display min-w850 dataTable no-footer" role="grid" aria-describedby="example3_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="min-width: 20px;">Sr No</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="min-width: 100px;">Order Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="min-width: 150px;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="min-width: 150px;">Order-ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="min-width: 50px;">Rupees</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="min-width: 50px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="min-width: 150px;">Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="min-width: 150px;">Contact No</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="min-width: 300px;">Address</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="min-width: 150px;">District</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="min-width: 150px;">Pincode</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="min-width: 150px;">QTY</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="min-width: 100px;">Payment Type</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" style="min-width: 150px;">Razorpay Payment ID</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($data as $row) {
                                            // var_dump($row);
                                            $userData = $this->db->select('*')->where('user_id', $row['user_id'])->from('users')->get()->row_array();
                                        ?>
                                            <tr role="row" class="odd">
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo date('d-F-Y', strtotime($row['created_at'])) ?></td>
                                                <td>
                                                    <span class="badge <?php echo $row['status'] == 1 ? "badge-success" : ($row['status'] == 'pending' ? "badge-warning" : "badge-danger") ?>">
                                                        <?php echo $row['status'] == 1 ? "Payment Success" : ($row['status'] == 'pending' ? "Payment Pending" : "Payment Failed") ?>
                                                    </span>
                                                </td>
                                                <td><?php echo $row['order_id'] ?></td>
                                                <td><?php echo $row['total_price'] ?></td>
                                                <td><?php echo $row['name'] == 'User' ? $userData['shipping_name'] : $row['name'] ?></td>
                                                <td><?php echo $row['shipping_email']==''?$userData['shipping_email']:$row['shipping_email'] ?></td>
                                                <td><?php echo $row['shipping_number']==''?$userData['shipping_number']:$row['shipping_number'] ?></td>
                                                <td>
                                                    <?php
                                                    if (empty($row['shipping_address']) && empty($row['shipping_city']) && empty($row['shipping_pincode'])) {
                                                        echo $userData['shipping_address'] . ' ,' . $userData['shipping_city'] . ' ,' . $userData['shipping_state'] . '-' . $userData['shipping_pincode'];
                                                    } else {
                                                        echo $row['shipping_address'] . ' ,' . $row['shipping_city'] . ' ,' . $row['shipping_state'] . '-' . $row['shipping_pincode'];
                                                    }

                                                    ?>
                                                </td>
                                                <td><?php echo $row['shipping_city']==''?$userData['shipping_city']:$row['shipping_city'] ?></td>
                                                <td><?php echo $row['shipping_pincode']==''?$userData['shipping_pincode']:$row['shipping_pincode'] ?></td>
                                                <td>
                                                    <?php
                                                    $product_purchase = explode(',', $row['product_purchase']);
                                                    foreach ($product_purchase as $products) {

                                                        $product = explode('-', $products);
                                                        $data = $this->db->select('*')
                                                            ->from('products')
                                                            ->where('id', $product[0])
                                                            ->get()
                                                            ->row_array();
                                                    ?>
                                                        <a target="_blank" style="text-decoration: underline;" href="<?php echo base_url() ?>children-marathi-magazine/subscribe.html"><?php echo $product[1] ?> x <?php echo $data['title'] ?></a><br>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td>Razorpay</td>
                                               
                                                <td><?php echo $row['razorpay_payment_id'] ?></td>


                                            </tr>
                                        <?php
                                            $i = $i + 1;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************Content body End***********************************-->
<!--**********************************footer Start***********************************-->
<?php $this->load->view('admin/layout/footer'); ?>
<!--**********************************footer End***********************************-->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script> -->
<script>
    $(".switchProduct").click(function() {
        var id = $(this).attr("data-id");
        $.post(
            base_url + "admin/product/status/" + id, {
                data: id
            },
            function(response) {
                console.log(response);
            }
        );
    });
    $(document).ready(function() {
        $('#example66').DataTable({
            select: true,
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });
</script>