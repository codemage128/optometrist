<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Invoice;

class PayDebtInvoice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'PayDebtInvoice:pay';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pay Deadline Debt Invoice';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $invoices = Invoice::whereStatus(2)->wherePaid(0)->get();

        foreach($invoices as $invoice) {
            $unpaidInvoiceItems = $invoice->unpaidItems();

            foreach($unpaidInvoiceItems as $invoiceItem) {
                if($invoiceItem->pay_date <= date('Y-m-d')) {
                    // $result = $invoiceItem->charge();

                    if(!$result['success']) {
                        $customer = $invoice->customer;
                        // $customer->sendDeadlineMessage();
                    }
                }
            }
        }
    }
}
