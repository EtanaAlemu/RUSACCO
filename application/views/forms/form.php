<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">

                        <h4 class="page-title"> Livelihood Improvement and Diversification </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">



                        <div class="table-responsive">
                            <table class="table table-bordered toggle-circle mb-0" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th scope="col" rowspan="2">Sr No</th>
                                        <th scope="col" rowspan="2">Name of Loan Beneficiari</th>
                                        <th scope="col" rowspan="2">Sex</th>
                                        <th scope="col" rowspan="2">Loan Amount</th>
                                        <th scope="col" rowspan="2">Type of Business Activity</th>
                                        <th scope="col" colspan="2">Income Gained</th>
                                        <th scope="col" colspan="2">Expenditure Amount</th>
                                        <th scope="col" colspan="2">Net Income from the Business</th>
                                        <th scope="col" colspan="4">Repayment</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Birr</th>
                                        <th scope="col">Cents</th>
                                        <th scope="col">Birr</th>
                                        <th scope="col">Cents</th>
                                        <th scope="col">Birr</th>
                                        <th scope="col">Cents</th>
                                        <th scope="col">Principal</th>
                                        <th scope="col">Interest</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">% Repaid</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($data as $row) {

                                        $gained_income = explode('.', $row->gained_income);

                                        $gained_income_birr = $gained_income[0];
                                        $gained_income_cent = count($gained_income) >= 2 ? $gained_income[1] : '00';

                                        $expenditure_amount = explode('.', $row->expenditure_amount);

                                        $expenditure_birr = $expenditure_amount[0];
                                        $expenditure_cent = count($expenditure_amount) >= 2 ? $expenditure_amount[1] : '00';

                                        $business_income = explode('.', $row->business_income);

                                        $business_income_birr = $business_income[0];
                                        $business_income_cent = count($business_income) >= 2 ? $business_income[1] : '00';

                                        $total = 100;
                                        $repayment = 15;


                                        echo "<tr>";
                                        echo "<th scope='row'>" . $i . "</th>";
                                        echo "<td>" . $row->loan_name . "</td>";
                                        echo "<td>" . $row->sex . "</td>";
                                        echo "<td>" . $row->loan_amount . "</td>";
                                        echo "<td>" . $row->business_type . "</td>";
                                        echo "<td>" . $gained_income_birr . "</td>";
                                        echo "<td>" . $gained_income_cent . "</td>";
                                        echo "<td>" . $expenditure_birr . "</td>";
                                        echo "<td>" . $expenditure_cent . "</td>";
                                        echo "<td>" . $business_income_birr . "</td>";
                                        echo "<td>" . $business_income_cent . "</td>";
                                        echo "<td>" . $row->repayment_principal . "</td>";
                                        echo "<td>" . $row->repayment_interest . "</td>";
                                        echo "<td>" . $total . "</td>";
                                        echo "<td>" . $repayment . "</td>";
                                        echo "</tr>";
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr class="active">
                                        <td colspan="8">
                                            <div class="text-right">
                                                <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

    </div>

</div>