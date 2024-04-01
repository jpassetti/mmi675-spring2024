### MMI 675 Advanced Web Design and Development - Spring 2024

# Blog Design

## Objectives

- What makes a good blog design?
- Sprinting and agile design
- Templates
- Examples
- Resources
- Project milestones
- Demos

## What makes a good blog design?

Simply put: a good blog design is one that is easy to read and navigate, visually appealing, and responsive. This means that the text is easy to read, the navigation is clear and intuitive, special media is displayed cleanly and the layout is well-organized.

## Design process

The design process for a blog typically involves the following steps:

1. Research - Identify the target audience and research their needs and preferences.
2. Wireframing - Create a wireframe of the blog layout to plan the structure and content.
3. Mockups - Create mockups of the blog design to visualize the layout and styling.
4. Development - Code the blog design using HTML, CSS and Wordpress/PHP.
5. Testing - Test the blog design on different devices and browsers to ensure it is responsive and functional.
6. Launch - Launch the blog design and monitor its performance and user feedback.

We're going to compress the process and sprint. We'll focus on **agile design** methodology.

Agile design is an iterative design process that involves creating and testing designs in small increments. This allows for quick feedback and adjustments, resulting in a more user-friendly and effective design. Agile design is especially useful for blogs, as it allows for rapid prototyping and testing of different layouts and features.

# Advantages of Sprinting on Design and Development for a Small Blog Project

Sprinting on design and development offers numerous benefits, especially for small projects like a blog. Here are the key advantages:

## 1. Rapid Prototyping and Feedback
- **Quick Iterations**: Enables the rapid creation of functional prototypes, allowing for quick refinements.
- **Immediate Feedback**: Facilitates early and frequent feedback, ensuring the project evolves to meet user needs effectively.

## 2. Enhanced Flexibility and Adaptability
- **Respond to Changes**: Agile sprints allow for adjustments in plans and priorities based on new insights or feedback.
- **Pivot Easily**: If a design or feature doesn’t meet expectations, it’s easier to pivot and explore new directions.

## 3. Efficient Use of Time and Resources
- **Focused Work**: Sprints help you focus on specific tasks or features, leading to more efficient use of time.
- **Resource Optimization**: By working in short bursts, resources are allocated more effectively, avoiding the waste of time and effort.

## 4. Improved Team Collaboration and Morale
- **Clear Communication**: If we were to work as a team, we'd have regular stand-ups and sprint meetings, enhancing communication and ensuring everyone is aligned on goals.
- **Sense of Achievement**: Completing sprints and seeing tangible progress boosts morale and motivation.

## 5. Better Project Management and Visibility
- **Transparent Process**: Agile sprints offer a clear framework for tracking progress and identifying blockers early.
- **Stakeholder Engagement**: Continuous involvement of stakeholders through the sprint process ensures that the final product is closely aligned with expectations.

Using sprints for designing and developing a small blog project not only streamlines the process but also ensures that the end product is adaptable, user-centric, and efficiently developed.

## Design as you code

Designing as you code is a common practice in web development. It involves creating the design and code at the same time, rather than creating the design first and then coding it. It's not my preferred method, but when time is not a luxury, or for small projects like a blog, it's an ideal strategy. This will allow you to see how the design looks and functions in real-time, and make changes as needed.

Focus and prioritize on the following:
- Layout (desktop vs mobile)
- Typography (font size, line height, font family)
- Spacing (padding, margin)
- Media (images, videos)

## Wordpress templates

There are many different templates in a theme that can be used to create a blog. Some common templates include:

- `index.php` - the homepage template file
- `single.php` - the template for single posts
- `page.php` - the template for pages
- `archive.php` - the general template for archives, or you can create specific templates for different types of archives like category and tag archives.
- `search.php` - the template for search results
- `404.php` - the template for 404 errors

You can read more about the [Wordpress Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/).

Look for opportunities to create reusable components with PHP partials, starting with a header, footer, and sidebar, but going further like an article teaser. This will make it easier to maintain and update the blog design.


## Great Blog Design Examples

I like browsing the web and examining the blog design of popular sites. I don't always feel like I should "reinvent" the wheel on blog design. I'd prefer to learn from other successful blogs. Here are several examples that stand out for their design, functionality, and user experience:

## 1. Awwwards Blog
- **Website**: [Awwwards](https://www.awwwards.com/blog/)
- **Why It’s Great**: A hub for web design and development inspiration, showcasing innovative design trends and ideas.

## 2. Smashing Magazine
- **Website**: [Smashing Magazine](https://www.smashingmagazine.com/articles/)
- **Why It’s Great**: Offers a mix of tutorials, opinion pieces, and in-depth articles on web design and development, with a focus on best practices in responsive design and usability.

## 3. Web Designer Depot
- **Website**: [Web Designer Depot](https://www.webdesignerdepot.com/)
- **Why It’s Great**: Engages readers with the latest in web design and development, featuring a modern and clean layout.

## 4. The Minimalists
- **Website**: [The Minimalists](https://www.theminimalists.com/blog/)
- **Why It’s Great**: Utilizes minimalistic design principles for a clutter-free layout that emphasizes content.

## 5. Tuts+ Code
- **Website**: [Tuts+ Code](https://code.tutsplus.com/)
- **Why It’s Great**: Provides tutorials and articles on web development and coding, with straightforward design for easy content discoverability.

## 6. Designmodo
- **Website**: [Designmodo](https://designmodo.com/blog/)
- **Why It’s Great**: Features high-quality visuals and interactive elements, offering articles, tutorials, and news on web design and development.

## 7. CSS-Tricks
- **Website**: [CSS-Tricks](https://css-tricks.com/)
- **Why It’s Great**: A resource for web design and development, particularly CSS, with creative web design and coding practices.

## 8. Joy the Baker
- **Website**: [Joy the Baker](https://joythebaker.com/)
- **Why It’s Great**: A personal blog that combines high-quality photography with engaging storytelling, offering a warm and inviting design.

When analyzing these blogs, consider focusing on elements such as layout and structure, typography, imagery and visuals, navigation, and responsiveness to understand their impact on user experience and design effectiveness.

## Project milestones

1. Friday, April 5: Wireframe or "low fidelity" design of blog layout in Figma, specifically the main page for mobile and desktop
2. Friday, April 5: Schedule one-on-one review of wireframe with Professor Passetti
3. Friday, April 5-Friday, April 12 - Code blog design in Wordpress
4. Friday, April 12, midnight - Submit zip of Wordpress theme

## Styling a quick prototype

There are many different ways to style a blog, depending on the content and audience. 

One of my main tips is to avoid focusing on fonts and color schemes as it can distract from the content. Instead, focus on readability and usability.

For a quick prototype, you can either code your own CSS (my preferred method) OR use a CSS framework like Tailwind CSS (newer) or Bootstrap (older). These frameworks provide pre-built components and styles that can be easily customized to create a blog design.

## Demo: Tailwind CSS

You need to pull in the Tailwind files from their CDN. Here's an example of how to use Tailwind CSS in your blog design:

```html
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
</body>
</html>
```

Notice the classes. Tailwind CSS is a utility-first CSS framework that provides a set of utility classes that can be used to style elements. For example, `text-3xl` sets the font size to 3xl (48px) and `font-bold` makes the text bold.

You can learn more about Tailwind CSS in their [documentation](https://tailwindcss.com/docs).

## Demo: Figma

Figma is a great tool for designing blog layouts. It allows you to create wireframes and mockups of your blog design, and share them with others for feedback. You can also use Figma to create interactive prototypes of your blog design, which can be useful for testing the user experience.

Figma is free to use for individuals, and they have an education tier, too. Learn more by visiting their [education page](https://www.figma.com/education/).
