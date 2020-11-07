<?php require_once __DIR__ . '/' . 'BLOCK/page_header_block.php'; ?>
<?php require_once __DIR__ . '/' . '../FRAMEWORK/sortable_table.php'; ?>
<h2>
    Subscribers
</h2>
<table class="table sortable-table">
    <tr>
        <th class="sortable-column">
            E-mail
        </th>
        <th class="sortable-column">
            Browser
        </th>
        <th class="sortable-column">
            Latitude
        </th>
        <th class="sortable-column">
            Longitude
        </th>
        <th class="sortable-column">
            Country
        </th>
        <th class="sortable-column order-is-descending">
            Date
        </th>
    </tr>
    <?php foreach ( $this->SubscriberArray as  $subscriber ) { ?>
        <tr>
            <td>
                <?php echo htmlspecialchars( $subscriber->Email ); ?>
            </td>
            <td>
                <?php echo htmlspecialchars( $subscriber->Browser ); ?>
            </td>
            <td>
                <?php echo htmlspecialchars( $subscriber->Latitude ); ?>
            </td>
            <td>
                <?php echo htmlspecialchars( $subscriber->Longitude ); ?>
            </td>
            <td>
                <?php echo htmlspecialchars( $subscriber->CountryCode ); ?>
            </td>
            <td>
                <?php echo htmlspecialchars( $subscriber->DateTime ); ?>
            </td>
        </tr>
    <?php } ?>
</table>
<?php require_once __DIR__ . '/' . 'BLOCK/page_footer_block.php'; ?>
