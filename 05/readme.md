### MMI 675: Advanced Web Design and Development
# Let's get styling

### Objectives

- Implement normalize.css
- Implement a custom CSS reset
- Style the header region
- Learn CSS flexbox

### 1: Normalize.css

[Normalize.css](https://necolas.github.io/normalize.css/) is a small CSS file that provides better cross-browser consistency in the default styling of HTML elements. It's a modern, HTML5-ready alternative to the traditional CSS reset.

1. Download the latest version of normalize.css from the [Normalize.css GitHub page](https://necolas.github.io/normalize.css/).
2. Add the normalize.css file to your css subdirectory.
3. Link to the normalize.css file in your header.php file.

### 2: Custom CSS Reset

Normalize doesn't reset typographic styles, so we'll need to create a custom CSS reset to remove the default margins and padding from all elements.

You can either add your own custom reset.css, or add the following to your style.css file:

```css
/* Custom CSS Reset */
html, body, h1, h2, h3, h4, h5, h6, p, ul, li, a, ul, li, button {
    margin: 0;
    padding: 0;
    font: inherit;
}
ul, li {
    list-style: none;
}
* {
    box-sizing: border-box;
}
```

### 3: CSS flexbox

Flexbox is a layout mode that provides for the arrangement of elements on a page. It's particularly useful for laying out items in a single row or column, and can be used to create complex layouts with relative ease.

```css
header {
    background-color: white;
    padding: 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
```

- Read the [CSS Tricks Guide to Flexbox](https://css-tricks.com/snippets/css/a-guide-to-flexbox/).
- Use my [CSS flexbox interactive module](https://mmi675-resources.vercel.app/).

### justify-content

The `justify-content` property aligns the flexible container's items across the horizontal axis.

- `flex-start`: Items are positioned at the beginning of the container.
- `flex-end`: Items are positioned at the end of the container.
- `center`: Items are positioned at the center of the container.
- `space-between`: items are evenly distributed in the line; first item is on the start line, last item on the end line
- `space-around`: items are evenly distributed in the line with equal space around them. Note that visually the spaces aren’t equal, since all the items have equal space on both sides. The first item will have one unit of space against the container edge, but two units of space between the next item because that next item has its own spacing that applies.
- `space-evenly`: items are distributed so that the spacing between any two items (and the space to the edges) is equal.

### align-items

The `align-items` property aligns the flexible container's items when the items across the vertical axis.

- `flex-start`: Items are positioned at the top of the container.
- `flex-end`: Items are positioned at the bottom of the container.
- `center`: Items are positioned at the center of the container.
- `stretch` (default): Items are stretched to fit the container.

### gap

The gap property explicitly controls the space between flex items. It applies that spacing only between items not on the outer edges.

```css
header {
    gap: 16px;
}
```

### flex-direction 

The `flex-direction` property specifies the direction of the flexible items.

- `row` (default): The flexible items are displayed horizontally, as a row.
- `column`: The flexible items are displayed vertically, as a column.

