### MMI 675: Advanced Web Design and Development

### Objectives

- Review BEM (Block, Element, Modifier) class naming conventions
- Review styling tables
- Continue styling HTML forms and buttons
- Create a `style-guide.php` and use it to test and develop your typographic styles

### Resources

- [BEM Introduction](https://getbem.com/introduction/)
- [BEM (Block, Element, Modifier) class naming conventions](https://en.bem.info/methodology/naming-convention/)
- [BEM 101](https://css-tricks.com/bem-101/)
- [BEM: 10 Common Problems And How To Avoid Them](https://www.smashingmagazine.com/2018/06/bem-for-beginners/)

### Review styling

We added styling to our table on the `admin/products/list.php` template using the BEM methodology.

#### Table styles

```html
<table class="table">
  <thead>
    <tr>
      <th class="table__heading">ID</th>
      <th class="table__heading">Title</th>
      <th class="table__heading">Price</th>
      <th class="table__heading">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="table__cell">1</td>
      <td class="table__cell">Product 1</td>
      <td class="table__cell">$100.00</td>
      <td class="table__cell">
        <a href="edit.php?id=1">Edit</a>
        <a href="delete.php?id=1">Delete</a>
      </td>
    </tr>
  </tbody>
</table>
```

### BEM (Block, Element, Modifier) class naming conventions

We're using the BEM methodology for our class names. This will help us to create a consistent naming convention for our classes, and make it easier to understand the purpose of each class.

BEM is a popular naming convention for CSS classes. It stands for Block, Element, Modifier. It's a way of naming classes that makes it easier to understand the purpose of each class, and to create a consistent naming convention for your classes.

```css
.block__element--modifier {
  /* Styles here */
}
```

- A **block** is a standalone component that is meaningful on its own.
- An **element** is a part of a block, such as a table cell, or a form label. It's not meaningful on its own, and is always part of a block.
- A **modifier** is a class that modifies the style of a block or element. For example, a primary button, or a delete button. Modifiers are indicate variants or flavors of a block or element.

Examples of BEM class names:

- `.table` - The block
- `.table__heading` - The element
- `.table__cell` - The element

or

- `.form` - The block
- `.form__group` - The element
- `.form__label` - The element

or

- `.btn` - The block
- `.btn--primary` - The modifier
- `.btn--secondary` - The modifier
- `.btn--tertiary` - The modifier
- `.btn--delete` - The modifier
- `.btn--large` - The modifier
- `.btn--medium` - The modifier
- `.btn--small` - The modifier

We can add modifiers for both the button's style (--primary, --secondary, --tertiary) and its size (--large, --medium, --small). This allows you to mix and match style and size modifiers as needed while maintaining a clear and consistent naming convention.

### Examples

For a large primary button, you would have:

```html
<button class="btn btn--primary btn--large">Primary Large</button>
```

For a medium secondary button, it would be:

```html
<button class="btn btn--secondary btn--medium">Secondary Medium</button>
```

And for a medium tertiary button:

```html
<button class="btn btn--tertiary btn--medium">Tertiary Medium</button>
```

# Table styles

```css
.table {
  padding: 20px;
  border-collapse: collapse; /* This will
remove the space between the cells */
  font-family: Arial;
  text-align: left;
  margin-bottom: 20px;
}
.table tr:nth-child(odd) {
  background-color: #f2f2f2; /*
Light gray background for odd rows */
}
.table__heading {
  background-color: lightgray;
  padding: 20px;
  text-transform: uppercase;
}
.table__cell {
  padding: 20px;
  border-bottom: 1px solid lightgray;
  vertical-align: top; /* Align text to
the top of the cell */
}
```

#### Form styles

```css
.form {
  margin-bottom: 20px;
}
.form__group {
  margin-bottom: 20px; /* Add space between form groups */
}
.form__label {
  display: block; /* Make the label a block element, so it takes up the full width of the container */
  font-family: Arial;
  font-weight: bold;
}
.form__input,
.form__textarea {
  width: 100%;
  padding: 16px;
  font-size: 16px;
  font-family: Arial;
}
```

#### Button styles

We need to make a system for buttons, so we can easily reuse buttons, or add new buttons with different styles based on their context. We'll use a base class of `.btn` and then add additional classes for different styles.

```html
<div class="btn__group">
  <button class="btn btn--primary">Primary Button</button>
  <button class="btn btn--delete">Delete Button</button>
  <button class="btn btn--secondary">Secondary Button</button>
</div>
```

```css
.btn {
  padding: 16px;
  color: white;
  font-family: Arial;
  font-size: 18px;
  font-weight: bold;
  cursor: pointer;
  text-decoration: none;
  border: 1px solid transparent;
}
.btn__group {
  margin-bottom: 20px;
  display: flex;
  gap: 16px;
}
.btn--primary {
  background-color: green;
}
.btn--delete {
  background-color: red;
  border-color: red;
}
.btn--secondary {
  background-color: white;
  border-color: black;
  color: black;
}
```

### BEM: typography

Using BEM (Block, Element, Modifier) methodology for your HTML classes, especially for typography, is a great way to maintain consistency and scalability in your CSS.

Let's take a look at how you might use BEM for typography. I recommend making a `style-guide.php` page and use it as a page to test and develop your styles. This will help you to see how your styles look in a real-world context and make it easier to test and develop your styles.

#### Headings

Use `heading` as the block and `--1` through `--6` as modifiers to denote the hierarchy level. This structure makes it clear that these elements are variations of the same fundamental component (a heading) but with different stylistic or hierarchical implications.

```html
<h1 class="heading heading--1">Heading 1</h1>
<h2 class="heading heading--2">Heading 2</h2>
<h3 class="heading heading--3">Heading 3</h3>
<h4 class="heading heading--4">Heading 4</h4>
<h5 class="heading heading--5">Heading 5</h5>
<h6 class="heading heading--6">Heading 6</h6>
```

```css
.heading {
  font-family: Arial;
  font-weight: bold;
  margin-bottom: 20px;
}
.heading--1 {
  font-size: 32px;
}
.heading--2 {
  font-size: 28px;
}
.heading--3 {
  font-size: 24px;
}
.heading--4 {
  font-size: 20px;
}
.heading--5 {
  font-size: 16px;
}
.heading--6 {
  font-size: 14px;
}
```

#### Paragraphs

For paragraphs, you might not need as many modifiers unless you have distinctly styled paragraphs throughout your site. You can use `paragraph` as the block. If you have variations, use modifiers to describe them, like `--lead` for introductory paragraphs, `--small` for smaller text, etc.

```html
<p class="paragraph">Regular paragraph.</p>
<p class="paragraph paragraph--lead">Lead paragraph with more emphasis.</p>
<p class="paragraph paragraph--small">Small text paragraph.</p>
```

```css
.paragraph {
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.35; /* 16px * 1.35 = 21.6px space between baselines */
  margin-bottom: 20px;
}
.paragraph--lead {
  font-size: 24px;
  font-family: Georgia, serif;
}
.paragraph--small {
  font-size: 14px;
}
```

#### Links

For links, you can use `link` as the block. Modifiers can denote different types or states of links, such as `--primary` for primary CTA links, `--secondary` for less emphasized links, or `--nav` for navigation links, etc. You can also use BEM for state-based styling like `--active` or `--disabled` if applicable.

```html
<a href="#" class="link">Regular Link</a>
<a href="#" class="link link--primary">Primary CTA Link</a>
<a href="#" class="link link--nav">Navigation Link</a>
<a href="#" class="link link--disabled">Disabled Link</a>
```

```css
.link {
  font-family: Arial;
  font-size: 16px;
  color: blue;
  text-decoration: none;
}
.link--primary {
  color: green;
}
.link--nav {
  color: black;
}
.link--disabled {
  color: gray;
  pointer-events: none;
  opacity: 0.5;
}
```

#### General Advice

- **Consistency:** Stick to a naming convention across your project. If you're using BEM, make sure you apply it consistently.
- **Semantics:** Choose names based on the element's purpose rather than its presentation (e.g., `--lead` for a leading paragraph rather than `--big` for its size).
- **Scalability:** Design your classes with scalability in mind. It's better to have a slightly more general class name that can be used in various contexts than to be overly specific and end up with duplicate styles.

This approach should help keep your CSS organized and make it easier for you (or your team) to understand and maintain the codebase.

#### Why use BEM and not just regular CSS?

- **Consistency:** BEM provides a consistent naming convention for your classes, making it easier to understand the purpose of each class.
- **Scalability:** BEM makes it easier to scale your CSS as your project grows. It's easier to add new styles and modify existing ones without creating conflicts or confusion.
- **Readability:** BEM makes your HTML and CSS more readable and understandable. It's easier to see how different elements are related and how they should be styled.
- **Collaboration:** BEM makes it easier to collaborate with other developers. If everyone follows the same naming convention, it's easier to understand and work with each other's code.

Is it a rule that you need to use BEM? No, it's not a rule, but it's a good practice that can help you maintain a clean and organized codebase. It's a tool that can simply help you write better CSS.
