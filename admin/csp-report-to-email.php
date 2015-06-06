<?php // Note: this script requires PHP ≥ 5.4. From https://mathiasbynens.be/notes/csp-reports

// Specify the email address to send reports to
define('EMAIL', 'it@electricbookworks.com');
// Specify the desired email subject for violation reports
define('SUBJECT', 'CSP violation');

// Send `204 No Content` status code
http_response_code(204);

// Get the raw POST data
$data = file_get_contents('php://input');
// Only continue if it’s valid JSON that is not just `null`, `0`, `false` or an
// empty string, i.e. if it could be a CSP violation report.
if ($data = json_decode($data)) {
  // Prettify the JSON-formatted data
  $data = json_encode(
    $data,
    JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
  );
  // Mail the CSP violation report
  mail(EMAIL, SUBJECT, $data, 'Content-Type: text/plain;charset=utf-8');
}

?>