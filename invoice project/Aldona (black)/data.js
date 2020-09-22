/**
 * Data and settings for the company
 *
 * How to properly enter your data:
 * Be sure when entering your information to enclose that data with double quotes. When entering numbers they
 * don't need to be enclosed with quotes, in general the sample data below should be used as general guide on
 * how to properly enter your data. And if you have double (or single) quotes in your data (like My "Awesome" Company)
 * than you should use something we call escaping special characters with the backslash sign (\) so the final
 * company name will be "My \"Awesome\" Company".
 */

var ib_invoice_data = {
  "{company_logo}"          : "data:image/png;base64,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", // base64 encoded data URI of PNG image
  "{company_name}"          : "Dino Store",
  "{company_address}"       : "227 Cobblestone Road | ",
  "{company_city_zip_state}": "30000 Bedrock | Cobblestone County",
  "{company_phone_fax}"     : " | +555 7 789-1234",
  "{company_email_web}"     : "http://dinostore.bed | hello@dinostore.bed",
  "{payment_info1}"         : "You can send payments at:",
  "{payment_info2}"         : "ACC:123006705 | ",
  "{payment_info3}"         : "IBAN:US100000060345 | ",
  "{payment_info4}"         : "SWIFT:BOA447",
  "{payment_info5}"         : "",
  "{issue_date_label}"      : "Issue Date:",
  "{issue_date}"            : "",
  "{net_term_label}"        : "Net:",
  "{net_term}"              : 21,
  "{due_date_label}"        : "Due Date:",
  "{due_date}"              : "",
  "{currency_label}"        : "* All prices are in ",
  "{currency}"              : "USD",
  "{po_number_label}"       : "P.O. #",
  "{po_number}"             : "1/3-147",
  "{bill_to_label}"         : "Bill to:",
  "{client_name}"           : "Slate Rock and Gravel Company",
  "{client_address}"        : "222 Rocky Way",
  "{client_city_zip_state}" : "30000 Bedrock, Cobblestone County",
  "{client_phone_fax}"      : "+555 7 123-5555",
  "{client_email}"          : "fred@slaterockgravel.bed",
  "{client_other}"          : "Attn: Fred Flintstone",
  "{invoice_title}"         : "INVOICE",
  "{invoice_number}"        : "#1",
  "{item_row_number_label}" : "",
  "{item_description_label}": "Item",
  "{item_quantity_label}"   : "Quantity",
  "{item_price_label}"      : "Price",
  "{item_discount_label}"   : "Discount",
  "{item_tax_label}"        : "Tax",
  "{item_line_total_label}" : "Linetotal",
  "{item_row_number}"       : "",
  "{item_description}"      : "",
  "{item_quantity}"         : "",
  "{item_price}"            : "",
  "{item_discount}"         : "",
  "{item_tax}"              : "",
  "{item_line_total}"       : "",
  "{amount_subtotal_label}" : "Subtotal:",
  "{amount_subtotal}"       : "",
  "{tax_name}"              : "Tax:",
  "{tax_value}"             : "",
  "{amount_total_label}"    : "Total:",
  "{amount_total}"          : "",
  "{amount_paid_label}"     : "Paid:",
  "{amount_due_label}"      : "Amount Due:",
  "{amount_due}"            : "",
  "{terms_label}"           : "Terms & Notes",
  "{terms}"                 : "Fred, thank you very much. We really appreciate your business.<br />Please send payments before the due date.",

  // Settings
  "date_format"             : "mm/dd/yyyy", // One of dd/mm/yyyy, dd-mm-yyyy, mm/dd/yyyy, mm-dd-yyyy
  "currency_position"       : "left", // One of left or right
  "default_columns"         : ["item_row_number", "item_description", "item_quantity", "item_price", "item_discount", "item_tax", "item_line_total"],
  "default_quantity"        : "1",
  "default_price"           : "0",
  "default_discount"        : "0",
  "default_tax"             : "0",
  "default_number_rows"     : 3,
  "auto_calculate_dates"    : true,
  "load_items"              : true,
  "invoicebus_fineprint"    : true,

  // Items
  "items": [
    {
      "item_description" : "Frozen Brontosaurus Ribs",
      "item_quantity"    : "2",
      "item_price"       : "120",
      "item_discount"    : "",
      "item_tax"         : "2%"
    },
    {
      "item_description" : "Mammoth Chops",
      "item_quantity"    : "14",
      "item_price"       : "175",
      "item_discount"    : "-10%",
      "item_tax"         : "5%"
    },
    {
      "item_description" : "",
      "item_quantity"    : "",
      "item_price"       : "",
      "item_discount"    : "",
      "item_tax"         : ""
    }
  ]
};
