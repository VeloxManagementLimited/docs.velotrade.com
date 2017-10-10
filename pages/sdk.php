
<!-- Introduction -->
<h4>Introduction</h4>
<p>
    We provide our clients with a public API that allows to securely connect to our facilities and integrate Velotrade into your application.
    The following page contains information and code examples on how to make use of the Java SDK provided by Velotrade.
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
<h4>Download</h4>
<p>
    You can download the latest version of our Java SDK <a href="/resources/api-sdk-java-latest.zip">here</a>.
</p>

<!-- Entities -->
<h4>Entities</h4>
<p>
    The following section describes the entities used. We will only display the getters, but we have corresponding setters for all entities.
</p>
<h5>Debtor</h5>
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
<h5>DebotrContact</h5>
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
        <td>Returns the id of the debtor contact.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getEmail()</td>
        <td>Returns the email of the debtor contact.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getName()</td>
        <td>Returns the name of the debtor contact.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getPhone()</td>
        <td>Returns the phone number of the debtor contact.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getDebtor()</td>
        <td>Returns the debtor object of the debtor contact.</td>
        <td>Debtor</td>
    </tr>
    </tbody>
</table>
<h5>Attachment</h5>
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
<h5>Invoice</h5>
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
<h5>Auction</h5>
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
        <td>Returns the name of the debtor contact.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getDebtorEmail()</td>
        <td>Returns the email of the debtor contact.</td>
        <td>String</td>
    </tr>
    <tr>
        <td>getDebtorPhone()</td>
        <td>Returns the phone of the debtor contact.</td>
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
<h4>Debtor Contacts</h4>
<h5>Get all debtor contacts</h5>
<p>
    In order to retrieve all debtor contacts assigned to a client account the getDebtorContacts() method needs to be
    invoked via the VelotradePublicAPI.
</p>
<pre>
<code class="java">
    import com.velotrade.sdk.api.VelotradePublicAPI;
    import com.velotrade.sdk.api.VelotradePublicAPIImpl;
    import com.velotrade.sdk.entity.DebtorContact;

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

<h5>Get single debtor contact</h5>
<p>
    A DebtorContact entity contains all the contact information on your buyer contact. By passing the debtor contact id to the method
    getDebtorContact(id) you can retrieve all the information required for a selected debtor without querying all of them.
</p>
<pre>
    <code class="java">
    import com.velotrade.sdk.api.VelotradePublicAPI;
    import com.velotrade.sdk.api.VelotradePublicAPIImpl;
    import com.velotrade.sdk.entity.Debtor;
    import com.velotrade.sdk.entity.DebtorContact;

    public static void main(String[] args) throws Exception {

        String baseURL  = "https://devapi.velotrade.com";
        String username = "username";
        String password = "password";

        VelotradePublicAPI api = new VelotradePublicAPIImpl(baseURL, username, password);

        String debtorId = "oa1a6a170-d3d4-428a-835f-35ab021d410b";
        DebtorContact debtorContact = api.getDebtorContact(debtorId);
        Debtor debtor = debtorContact.getDebtor();

        System.out.println(debtor.getTradingName() + " " + debtorContact.getEmail());

    }
    </code>
</pre>




<!-- Auction -->
<h4>Auction</h4>

<h5>Upload Attachment</h5>
<p>
    Files can be easily uploaded using the uploadAttachment() method that takes the file path as parameter. An attachment object is returned when the upload is successful.
</p>
<pre>
    <code class="java">
    import com.velotrade.sdk.api.VelotradePublicAPI;
    import com.velotrade.sdk.api.VelotradePublicAPIImpl;
    import com.velotrade.sdk.entity.Debtor;
    import com.velotrade.sdk.entity.DebtorContact;

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

<h5>Create Auction</h5>
<p>
    In order to create an auction, we need to retrieve the DebtorContact via the getDebtorContact(id) method,
    create an Invoice object and create three attachments (Invoice Document, Transporation Document, Purchase Order).
    All the objects need to be passed. If successful the method createAuction(...) will return an auction id that can be used to query the auction.
</p>
<pre>
    <code class="java">
    import com.velotrade.sdk.api.VelotradePublicAPI;
    import com.velotrade.sdk.api.VelotradePublicAPIImpl;
    import com.velotrade.sdk.entity.Debtor;
    import com.velotrade.sdk.entity.DebtorContact;

    public static void main(String[] args) throws Exception{

        String issueDate = "2017-09-28T16:00:00.000Z";
        String dueDate = "2017-11-27T16:00:00.000Z";
        String expectedPaymentDate = "2017-11-27T16:00:00.000Z";
        DateTimeFormatter parser = ISODateTimeFormat.dateTimeParser();

        Date today = new Date();
        String id = "oa1a6a170-d3d4-428a-835f-35ab021d410c";
        Invoice invoice = new Invoice();
        invoice.setNumber("INVOICE123456");
        invoice.setIssueDate(parser.parseDateTime(issueDate).toDate());
        invoice.setCurrency("USD");
        invoice.setAmount(10_000);
        invoice.setExpectedAmount(10_000);
        invoice.setPaymentTerms(60);
        invoice.setDueDate(parser.parseDateTime(dueDate).toDate());
        invoice.setExpectedPaymentDate(parser.parseDateTime(expectedPaymentDate).toDate());
        invoice.setDescription("Description");


        String result = null;
        try {
            Attachment attachment = api.uploadAttachment("<file path>");
            DebtorContact debtorContact = api.getDebtorContact(id);
            Auction auction = new Auction(debtorContact, invoice, attachment, attachment, attachment);

            result = api.createAuction(auction);

        } catch (Exception e) {
            e.printStackTrace();
        }

    }
    </code>
</pre>

<h5>Get Auction Status</h5>
<p>
    We can retrieve the auction status by invoking the method getAuctionStatus(auctionId).
    <br>
    The following statuses will be returned (String):

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
    import com.velotrade.sdk.entity.Debtor;
    import com.velotrade.sdk.entity.DebtorContact;

    public static void main(String[] args) throws Exception {

        String baseUrl = "https://devapi.velotrade.com";

        String username = "robin.walser+sel1@me.com";
        String password = "LBlN/DMcGA/NnI7WQot3qg==";

        VelotradePublicAPI api = new VelotradePublicAPIImpl(baseUrl, username, password);

        String auctionId = "te7f6f4d5-717d-4012-b52c-ad9755b3a4af";
        String auctionStatus = api.getAuctionStatus(auctionId);
        System.out.println(auctionStatus);

    }
    </code>
</pre>

<h5>Get Auction Phase</h5>
<p>
    We can retrieve the auction phase by invoking the method getAuctionPhase(auctionId).
    <br><br>
    Below is an extract of the most important statuses returned as a string:
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
        <td>DETAILS_VERIFICATION</td>
        <td>Auction is currently under review.</td>
    </tr>
    <tr>
        <td>MORE_DATA_NEEDED</td>
        <td>Auction requires more details.</td>
    </tr>
    <tr>
        <td>SELLER_TO_APPROVE</td>
        <td>Auction can be reviewed and approved by the seller.</td>
    </tr>
    <tr>
        <td>READY_TO_GO_LIVE</td>
        <td>Auction is ready to go live.</td>
    </tr>
    <tr>
        <td>FIRST_ROUND_MANUAL_BUY</td>
        <td>Auction is currently in the first round.</td>
    </tr>
    <tr>
        <td>SUCCESSFUL</td>
        <td>Auction has successfully cleared.</td>
    </tr>
    <tr>
        <td>UNSUCCESSFUL</td>
        <td>Auction has unsuccessfully closed.</td>
    </tr>
    <tr>
        <td>REJECTED</td>
        <td>Auction has been rejected.</td>
    </tr>
    <tr>
        <td>REPAID</td>
        <td>Auction has been repaid.</td>
    </tr>
    </tbody>
</table>
<pre>
    <code class="java">
    import com.velotrade.sdk.api.VelotradePublicAPI;
    import com.velotrade.sdk.api.VelotradePublicAPIImpl;
    import com.velotrade.sdk.entity.Debtor;
    import com.velotrade.sdk.entity.DebtorContact;

    public static void main(String[] args) throws Exception {

        String baseUrl = "https://devapi.velotrade.com";

        String username = "robin.walser+sel1@me.com";
        String password = "LBlN/DMcGA/NnI7WQot3qg==";

        VelotradePublicAPI api = new VelotradePublicAPIImpl(baseUrl, username, password);

        String auctionId = "te7f6f4d5-717d-4012-b52c-ad9755b3a4af";
        String auctionStatus = api.getAuctionStatus(auctionId);
        System.out.println(auctionStatus);

    }
    </code>
</pre>


<h5>Approve Auction</h5>
<p>
    An auction that is in the phase SELLER_TO_APPROVE can be advanced to the next stage by approving the auction.
</p>
<pre>
    <code class="java">
    import com.velotrade.sdk.api.VelotradePublicAPI;
    import com.velotrade.sdk.api.VelotradePublicAPIImpl;
    import com.velotrade.sdk.entity.Debtor;
    import com.velotrade.sdk.entity.DebtorContact;

    public static void main(String[] args) throws Exception {

        String baseUrl = "https://devapi.velotrade.com";

        String username = "robin.walser+sel1@me.com";
        String password = "LBlN/DMcGA/NnI7WQot3qg==";

        VelotradePublicAPI api = new VelotradePublicAPIImpl(baseUrl, username, password);

        String auctionId = "te7f6f4d5-717d-4012-b52c-ad9755b3a4af";
        Boolean approveStatus = api.approveAuction(auctionId);
        System.out.println(approveStatus);

    }
    </code>
</pre>

<h5>Reject Auction</h5>
<p>
    An auction that is in the phase SELLER_TO_APPROVE can be rejected.
</p>
<pre>
    <code class="java">
    import com.velotrade.sdk.api.VelotradePublicAPI;
    import com.velotrade.sdk.api.VelotradePublicAPIImpl;
    import com.velotrade.sdk.entity.Debtor;
    import com.velotrade.sdk.entity.DebtorContact;

    public static void main(String[] args) throws Exception {

        String baseUrl = "https://devapi.velotrade.com";

        String username = "robin.walser+sel1@me.com";
        String password = "LBlN/DMcGA/NnI7WQot3qg==";

        VelotradePublicAPI api = new VelotradePublicAPIImpl(baseUrl, username, password);

        String auctionId = "te7f6f4d5-717d-4012-b52c-ad9755b3a4af";
        Boolean rejectStatus = api.rejectAuction(auctionId);
        System.out.println(rejectStatus);

    }
    </code>
</pre>