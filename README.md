# Price Formatter Shortcode

The price-format shortcode allows you to display a formatted price for a specific post meta field.

## Usage

To use the price-format shortcode, add it to your post or page content with the following attributes:

- field: The name of the post meta field that contains the price value.
- prefix: The text to display before the formatted price (optional).
- suffix: The text to display after the formatted price (optional).
- decimals: The number of decimal places to display (optional, default is 0).
- default: The text to display if the price value is empty (optional).

Here's an example usage:

```
[price-format field="my_price_field" prefix="$" suffix="p/w" decimals="2" default="N/A"]
```


This will display the value of the `my_price_field` post meta field for the current post, formatted as a price with a `$` prefix, `p/w` suffix, and 2 decimal places. If the `my_price_field` value is empty, it will display `N/A` instead.

## Implementation

The price-format shortcode is implemented in the `price_format_shortcode()` function in the `shortcode-price-format.php` file. The function retrieves the value of the specified post meta field, formats it as a price with the specified options, and returns the formatted price with the specified prefix and suffix.