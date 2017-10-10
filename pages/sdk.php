<!-- Content -->

<h5><a id="content"></a>Content</h5>
<ul>
    <li><a href="#introduction">Introduction</a></li>
    <li><a href="#download">Download</a></li>
    <li><a href="#entities">Entities</a>
    <ul>
        <li><a href="#endebtor">Debtor</a></li>
        <li><a href="#endebtorcontact">DebtorContact</a></li>
        <li><a href="#enattachment">Attachment</a></li>
        <li><a href="#eninvoice">Invoice</a></li>
        <li><a href="#enauction">Auction</a></li>
    </ul>
    </li>
    <li><a href="#debtorcontacts">Debtor Contacts</a>
        <ul>
            <li><a href="#getdebtorcontacts">Get all Debtor Contacts</a></li>
            <li><a href="#getsingledebtorcontact">Get single Debtor Contact</a></li>
        </ul>
    </li>
    <li><a href="#auction">Auction</a>
        <ul>
            <li><a href="#uploadattachment">Upload Attachment</a></li>
            <li><a href="#createauction">Create Auction</a></li>
            <li><a href="#auctionstatus">Get Auction Status</a></li>
            <li><a href="#auctionphase">Get Auction Phase</a></li>
            <li><a href="#approveauction">Approve Auction</a></li>
            <li><a href="#rejectauction">Reject Auction</a></li>
        </ul>
    </li>
</ul>


<!-- Introduction -->
<h4><a id="introduction"></a>Introduction</h4>
<p>
    We provide our clients with a public API that allows to securely connect to our facilities and integrate Velotrade into your application.
    The following page contains information and code examples on how to make use of the Java SDK.
    <br><br>
    <b>Please note that all interactions with our environments are monitored and protected by application firewalls. If you encounter any difficulties, please do not hesitate to contact us.</b><br><br>

</p>
<h5>Environments</h5>
<table class="u-full-width">
    <thead>
    <tr>
        <th>Environment</th>
        <th>URL</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Test</td>
        <td>https://devapi.velotrade.com</td>
    </tr>
    <tr>
        <td>Prodution</td>
        <td>https://api.velotrade.com</td>
    </tr>
    </tbody>
</table>

<!-- Download -->
<h4><a id="download"></a>Download</h4>
<p>
    You can download the latest version of our Java SDK <a href="/resources/velotrade-sdk-1.0.0.jar.zip">here</a>.
</p>

<!-- Entities -->
<h4><a id="entities"></a>Entities</h4>
<p>
    The following section describes the entities used. We will only display the getters, but we have corresponding setters for all entities.
</p>
<h5><a id="endebtor"></a>Debtor</h5>
<table class="u-full-width">
    <thead>
    <tr>
        <th>Method</th>
        <th>Description</th>
        <th>Return value</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>getId()</td>
        <td>Returns the id of the debtor.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getAddress()</td>
        <td>Returns the address of the debtor.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getBr()</td>
        <td>Returns the business registration number of the debtor.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getCity()</td>
        <td>Returns the city of the debtor.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getHumanId()</td>
        <td>Returns the human-readable id of the debtor.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getLegalName()</td>
        <td>Returns the legal name of the debtor.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getTradingName()</td>
        <td>Returns the trading name of the debtor.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getWebsite()</td>
        <td>Returns the website of the debtor.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getZipcode()</td>
        <td>Returns the zip code of the debtor.</td>
        <td>String</td>
    </tr><tr>
        <td>getCountry()</td>
        <td>Returns the country of the debtor.</td>
        <td>String</td>
    </tr>
    </tbody>
</table>
<h5><a id="endebtorcontact"></a>DebotrContact</h5>
<table class="u-full-width">
    <thead>
    <tr>
        <th>Method</th>
        <th>Description</th>
        <th>Return value</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>getId()</td>
        <td>Returns the id of the Debtor Contact.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getEmail()</td>
        <td>Returns the email of the Debtor Contact.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getName()</td>
        <td>Returns the name of the Debtor Contact.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getPhone()</td>
        <td>Returns the phone number of the Debtor Contact.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getDebtor()</td>
        <td>Returns the debtor object of the Debtor Contact.</td>
        <td>Debtor</td>
    </tr>
    </tbody>
</table>
<h5><a id="enattachment"></a>Attachment</h5>
<table class="u-full-width">
    <thead>
    <tr>
        <th>Method</th>
        <th>Description</th>
        <th>Return value</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>getId()</td>
        <td>Returns the id of the attachment.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getName()</td>
        <td>Returns the name of the attachment.</td>
        <td>String</td>
    </tr>
    </tbody>
</table>
<h5><a id="eninvoice"></a>Invoice</h5>
<table class="u-full-width">
    <thead>
    <tr>
        <th>Method</th>
        <th>Description</th>
        <th>Return value</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>getNumber()</td>
        <td>Returns the number of the invoice.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getIssueDate()</td>
        <td>Returns the issue date of the invoice.</td>
        <td>Date</td>
    </tr>
    <tr>
        <td>getCurrency()</td>
        <td>Returns the currency of the invoice.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getAmount()</td>
        <td>Returns the amount of the invoice.</td>
        <td>Float</td>
    </tr>
    <tr>
        <td>getExpectedAmount()</td>
        <td>Returns the expected amount of the invoice.</td>
        <td>Float</td>
    </tr>
    <tr>
        <td>getPaymentTerms()</td>
        <td>Returns the payment terms of the invoice.</td>
        <td>Float</td>
    </tr>
    <tr>
        <td>getDueDate()</td>
        <td>Returns the due date of the invoice.</td>
        <td>Date</td>
    </tr>
    <tr>
        <td>getExpectedPaymentDate()</td>
        <td>Returns the expected payment date of the invoice.</td>
        <td>Date</td>
    </tr>
    <tr>
        <td>getDescription()</td>
        <td>Returns the description of the invoice.</td>
        <td>String</td>
    </tr>
    </tbody>
</table>
<h5><a id="enauction"></a>Auction</h5>
<table class="u-full-width">
    <thead>
    <tr>
        <th>Method</th>
        <th>Description</th>
        <th>Return value</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>getDebtor()</td>
        <td>Returns the debtor object of the auction.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getDebtorName()</td>
        <td>Returns the name of the Debtor Contact.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getDebtorEmail()</td>
        <td>Returns the email of the Debtor Contact.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getDebtorPhone()</td>
        <td>Returns the phone of the Debtor Contact.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getNumber()</td>
        <td>Returns the number of the invoice.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getIssueDate()</td>
        <td>Returns the issue date of the invoice.</td>
        <td>Date</td>
    </tr>
    <tr>
        <td>getCurrency()</td>
        <td>Returns the currency of the invoice.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getAmount()</td>
        <td>Returns the amount of the invoice.</td>
        <td>Float</td>
    </tr>
    <tr>
        <td>getExpectedAmount()</td>
        <td>Returns the expected amount of the invoice.</td>
        <td>Float</td>
    </tr>
    <tr>
        <td>getPaymentTerms()</td>
        <td>Returns the payment terms of the invoice.</td>
        <td>Float</td>
    </tr>
    <tr>
        <td>getDueDate()</td>
        <td>Returns the due date of the invoice.</td>
        <td>Date</td>
    </tr>
    <tr>
        <td>getExpectedPaymentDate()</td>
        <td>Returns the expected payment date of the invoice.</td>
        <td>Date</td>
    </tr>
    <tr>
        <td>getDescription()</td>
        <td>Returns the description of the invoice.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getInvoice()</td>
        <td>Returns the invoice attachment object of the auction.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getTransporationDocument()</td>
        <td>Returns the transporation document attachment object of the auction.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getPurchaseOrder()</td>
        <td>Returns the purchase order attachment object of the auction.</td>
        <td>String</td>
    </tr>
    </tbody>
</table>

<!-- Debtor Contacts -->

<h4><a id="debtorcontacts"></a>Debtor Contacts</h4>
<h5><a id="getalldebtorcontacts"></a>Get all Debtor Contacts</h5>
<p>
    In order to retrieve all Debtor Contacts assigned to your account, you need to call the method getDebtorContacts().
</p>
<pre>
<code class="java">
    import com.velotrade.sdk.api.VelotradePublicAPI;
    import com.velotrade.sdk.api.VelotradePublicAPIImpl;
    import com.velotrade.sdk.entity.*;

    public static void main(String[] args) throws Exception {

        String baseURL  = "https://devapi.velotrade.com";
        String username = "username";
        String password = "password";

        VelotradePublicAPI api = new VelotradePublicAPIImpl(baseURL, username, password);

        List<DebtorContact> result = api.getDebtorContacts();

        for(DebtorContact contact : result) {
            System.out.println(contact.getId() + " " + contact.getName() + " " + contact.getEmail());
        }

    }
</code>
</pre>

<h5><a id="getsingledebtorcontact"></a>Get single Debtor Contact</h5>
<p>
    To retrieve a single Debtor Contact, you need to pass the Debtor Contact id to the getDebtorContact() method.
</p>
<pre>
    <code class="java">
    import com.velotrade.sdk.api.VelotradePublicAPI;
    import com.velotrade.sdk.api.VelotradePublicAPIImpl;
    import com.velotrade.sdk.entity.*;

    public static void main(String[] args) throws Exception {

        String baseURL  = "https://devapi.velotrade.com";
        String username = "username";
        String password = "password";

        VelotradePublicAPI api = new VelotradePublicAPIImpl(baseURL, username, password);

        String debtorContactId = "oa1a6a170-d3d4-428a-835f-35ab021d410b";
        DebtorContact debtorContact = api.getDebtorContact(debtorContactId);
        Debtor debtor = debtorContact.getDebtor();

        System.out.println(debtor.getTradingName() + " " + debtorContact.getEmail());

    }
    </code>
</pre>

<!-- Auction -->

<h4><a id="auction"></a>Auction</h4>

<h5><a id="uploadattachment"></a>Upload Attachment</h5>
<p>
    Files can easily be uploaded using the uploadAttachment() method that takes the file path as parameter. An attachment object is returned when the upload is successful.
</p>
<pre>
    <code class="java">
    import com.velotrade.sdk.api.VelotradePublicAPI;
    import com.velotrade.sdk.api.VelotradePublicAPIImpl;
    import com.velotrade.sdk.entity.*;

    public static void main(String[] args) throws Exception {

        String baseURL  = "https://devapi.velotrade.com";
        String username = "username";
        String password = "password";

        VelotradePublicAPI api = new VelotradePublicAPIImpl(baseURL, username, password);
        Attachment attachment = api.uploadAttachment("file-path");
        System.out.println(attachment);

    }
    </code>
</pre>

<h5><a id="createauction"></a>Create Auction</h5>
<p>
    In order to create an auction, we need to retrieve the DebtorContact via the getDebtorContact() method,
    create an Invoice object, and create three attachments (Invoice Document, Transporation Document, Purchase Order).
    All the objects need to be passed tot the createAuction() method. If successful the method will return an auction id that can be used to query the auction.
</p>
<pre>
    <code class="java">
    import com.velotrade.sdk.api.VelotradePublicAPI;
    import com.velotrade.sdk.api.VelotradePublicAPIImpl;
    import com.velotrade.sdk.entity.*;

    public static void main(String[] args) throws Exception {

        String baseURL  = "https://devapi.velotrade.com";
        String username = "username";
        String password = "password";

        VelotradePublicAPI api = new VelotradePublicAPIImpl(baseUrl, username, password);

        String debtorId = "oa1a6a170-d3d4-428a-835f-35ab021d410c";
        DebtorContact debtorContact = api.getDebtorContact(debtorId);

        Invoice invoice = new Invoice();

        invoice.setNumber("INV000023456789");
        invoice.setCurrency("USD");
        invoice.setAmount(100_000);
        invoice.setExpectedAmount(100_000);
        invoice.setPaymentTerms(60); // days
        invoice.setIssueDate(new SimpleDateFormat("dd/MM/yyyy").parse("10/10/2017"));
        invoice.setDueDate(new SimpleDateFormat("dd/MM/yyyy").parse("11/12/2017"));
        invoice.setExpectedPaymentDate(new SimpleDateFormat("dd/MM/yyyy").parse("11/12/2017"));
        invoice.setDescription("Description");

        Attachment invoiceDocument       = api.uploadAttachment("file-path");;
        Attachment transporationDocument = api.uploadAttachment("file-path");
        Attachment purchaseOrderDocument = api.uploadAttachment("file-path");

        Auction auction = new Auction(debtorContact, invoice, invoiceDocument,transporationDocument, purchaseOrderDocument);
        String auctionId = api.createAuction(auction);

        System.out.println(auctionId);

    }
    </code>
</pre>

<h5><a id="auctionstatus"></a>Get Auction Status</h5>
<p>
    We can retrieve the auction status by invoking the method getAuctionStatus(auctionId).
    <br>
    The following statuses will be returned as a string:

</p>
<table>
    <thead>
    <tr>
        <th>Status</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>UNDER_REVIEW</td>
        <td>Auction is currently under review.</td>
    </tr>
    <tr>
        <td>LIVE</td>
        <td>Auction is currently live.</td>
    </tr>
    <tr>
        <td>CLEARED</td>
        <td>Auction is cleared.</td>
    </tr>
    <tr>
        <td>CLOSED</td>
        <td>Auction is closed.</td>
    </tr>
    <tr>
        <td>REPAYMENT</td>
        <td>Auction has been repaid.</td>
    </tr>
    </tbody>
</table>
<pre>
    <code class="java">
    import com.velotrade.sdk.api.VelotradePublicAPI;
    import com.velotrade.sdk.api.VelotradePublicAPIImpl;

    public static void main(String[] args) throws Exception {

        String baseURL  = "https://devapi.velotrade.com";
        String username = "username";
        String password = "password";

        VelotradePublicAPI api = new VelotradePublicAPIImpl(baseUrl, username, password);

        String auctionId = "te7f6f4d5-717d-4012-b52c-ad9755b3a4af";
        String auctionStatus = api.getAuctionStatus(auctionId);
        System.out.println(auctionStatus);

    }
    </code>
</pre>

<h5><a id="auctionphase"></a>Get Auction Phase</h5>
<p>
    We can retrieve the auction phase by invoking the method getAuctionPhase(auctionId).
    <br><br>
    Below is an extract of the most important statuses returned as a string:
</p>
<table>
    <thead>
    <tr>
        <th>Phase</th>
        <th>Status</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>DETAILS_VERIFICATION</td>
        <td>UNDER_REVIEW</td>
        <td>Auction is currently under review.</td>
    </tr>
    <tr>
        <td>MORE_DATA_NEEDED</td>
        <td>UNDER_REVIEW</td>
        <td>Auction requires more details.</td>
    </tr>
    <tr>
        <td>SELLER_TO_APPROVE</td>
        <td>UNDER_REVIEW</td>
        <td>Auction can be reviewed and approved by the seller.</td>
    </tr>
    <tr>
        <td>READY_TO_GO_LIVE</td>
        <td>UNDER_REVIEW</td>
        <td>Auction is ready to go live.</td>
    </tr>
    <tr>
        <td>FIRST_ROUND_MANUAL_BUY</td>
        <td>LIVE</td>
        <td>Auction is currently in the first round.</td>
    </tr>
    <tr>
        <td>FIRST_ROUND_AUTOBUY</td>
        <td>LIVE</td>
        <td>Auction is currently in the first round auto buy.</td>
    </tr>
    <tr>
        <td>FIRST_ROUND_BUYOUT</td>
        <td>LIVE</td>
        <td>Auction is currently in the first round buyout.</td>
    </tr>
    <tr>
        <td>SECOND_ROUND_MANUAL_BUY</td>
        <td>LIVE</td>
        <td>Auction is currently in the second round.</td>
    </tr>
    <tr>
        <td>SECOND_ROUND_AUTOBUY</td>
        <td>LIVE</td>
        <td>Auction is currently in the second round auto buy.</td>
    </tr>
    <tr>
        <td>SECOND_ROUND_BUYOUT</td>
        <td>LIVE</td>
        <td>Auction is currently in the second round buyout.</td>
    </tr>
    <tr>
        <td>SUCCESSFUL</td>
        <td>CLEARED</td>
        <td>Auction has successfully cleared.</td>
    </tr>
    <tr>
        <td>UNSUCCESSFUL</td>
        <td>CLOSED</td>
        <td>Auction has unsuccessfully closed.</td>
    </tr>
    <tr>
        <td>REJECTED</td>
        <td>CLOSED</td>
        <td>Auction has been rejected.</td>
    </tr>
    <tr>
        <td>REPAID</td>
        <td>CLOSED</td>
        <td>Auction has been repaid.</td>
    </tr>
    </tbody>
</table>
<pre>
    <code class="java">
    import com.velotrade.sdk.api.VelotradePublicAPI;
    import com.velotrade.sdk.api.VelotradePublicAPIImpl;

    public static void main(String[] args) throws Exception {

        String baseURL  = "https://devapi.velotrade.com";
        String username = "username";
        String password = "password";

        VelotradePublicAPI api = new VelotradePublicAPIImpl(baseUrl, username, password);

        String auctionId = "te7f6f4d5-717d-4012-b52c-ad9755b3a4af";
        String auctionPhase = api.getAuctionPhase(auctionId);
        System.out.println(auctionPhase);

    }
    </code>
</pre>


<h5><a id="approveauction"></a>Approve Auction</h5>
<p>
    An auction that is in the phase SELLER_TO_APPROVE can be advanced to the next stage by approving the auction.
</p>
<pre>
    <code class="java">
    import com.velotrade.sdk.api.VelotradePublicAPI;
    import com.velotrade.sdk.api.VelotradePublicAPIImpl;

    public static void main(String[] args) throws Exception {

        String baseURL  = "https://devapi.velotrade.com";
        String username = "username";
        String password = "password";

        VelotradePublicAPI api = new VelotradePublicAPIImpl(baseUrl, username, password);

        String auctionId = "te7f6f4d5-717d-4012-b52c-ad9755b3a4af";
        Boolean approveStatus = api.approveAuction(auctionId);
        System.out.println(approveStatus);

    }
    </code>
</pre>

<h5><a id="rejectauction"></a>Reject Auction</h5>
<p>
    An auction that is in the phase SELLER_TO_APPROVE can be rejected.
</p>
<pre>
    <code class="java">
    import com.velotrade.sdk.api.VelotradePublicAPI;
    import com.velotrade.sdk.api.VelotradePublicAPIImpl;

    public static void main(String[] args) throws Exception {

        String baseURL  = "https://devapi.velotrade.com";
        String username = "username";
        String password = "password";

        VelotradePublicAPI api = new VelotradePublicAPIImpl(baseUrl, username, password);

        String auctionId = "te7f6f4d5-717d-4012-b52c-ad9755b3a4af";
        Boolean rejectStatus = api.rejectAuction(auctionId);
        System.out.println(rejectStatus);

    }
    </code>
</pre>
