# pwp
Personal Website Project for Jeffrey Cooper
This site will be a professional resume listing experience for Jeffrey Cooper. 

## Milestone 1 Feedback
Thoughtful and very well done purpose, audience, goal(s), persona, and use case for your PWP. Your HTML is excellent, and your project has been set up perfectly according to specifications.

You have a very broad scope outlined here, with multiple goals specified in detail. PWP is intended to be quite narrow in scope (1 page MVP), which is necessary considering our limited class time and upcoming capstone work load. It might be better to focus on one or maybe two key areas at this time, and plan to continue development down the line after graduation.

Considering the breadth of scope you have here, I think it could be a challenging task to effectively feature content for all of your goals on one single page. The key word being "**effectively**". One page websites can quickly become overwhelming if the scroll is too long, and the focus and flow of ideas and content are too diverse or scattered.

That being said - what you propose here can be done reasonably well. But it will take a sophisticated touch. You could effectively design a one page site that serves all of your goals, but a laser-focused content strategy and an intuitive and engaging UI design will be critically important in order for your end-users not to get lost or overwhelmed.

I still stand by my suggestion to select one or two very specific areas to focus on right now for your MVP, and develop a more comprehensive site after graduation.

Later on, you may want to consider creating more than one site if your goals are well differentiated and you have plenty of content that you want to feature - a site that focuses on your music career, a site that promotes your freelance development work, and a site, or sites, that will serve your other areas of professional and business development.

Your Milestone 1 passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin work on [Milestone 2&alpha;](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/). Go ahead and read the documentation on bootcamp-coders.cnm.edu, and I will be going over [Milestone 2&alpha;](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/) in class on Monday 5/1.

### Edits &amp; Suggestions
- Delete the Jekyll configuration file in the root of your project (*\_config.yml*) - we won't be using Jekyll for PWP.

## Milestone 2&alpha; Feedback
Excellent work on the wireframes. These are detailed and well thought out, and should provide you with a good roadmap to guide your development. Nice work.

One question I have for you is regarding the horizontal list of links at the top of the Experience section on the mobile view. How do you intend this to function? And I do want to caution you regarding this since horizontal screen space is limited on mobile, and highly variable depending on device (for example, an iPhone 5 vs. Google Pixel).

I see that there are some sections that are included on mobile that are not included on the wide-screen layout. Bootstrap has some very useful [Responsive Utility Classes](http://getbootstrap.com/css/#responsive-utilities) that will display or hide an element (and it's children) on specific breakpoints.

Overall I think you've made some great choices here, and I look forward to seeing your project take shape. Your Milestone 2&alpha; passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin development on your PWP. Build your layout directly inside the `/public_html` directory. You do not need to use the `/documentation` directory any more.

### Edits &amp; Suggestions
- Don't forget the `alt` attribute on your `<img>` tags.
- I would move your Milestone images into the `/documentation` directory, so they are separate from the rest of your PWP.

## Milestone 2b Feedback
Nice work - detailed feedback left via Slack. Your Milestone 2&beta; passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

## Milestone 3 Feedback
Excellent job getting everything to work seamlessly together! Your page flows well logically and visually, and the content you've provided fits nicely in regards to your ideal user ( I'm assuming you're using your site to attract potential web development clients ). 

A few small things that I noticed are related to your `<div>` structure and containers. When my screen is greater than the medium bootstrap breakpoint your footer is hovering about 200px above the bottom of the closing body tag. Another little issue that occurs when I change my screen size to mobile. Once that happens I'm able to scroll horizontally, which should not happen on a mobile device. If you check your divs and make sure you're wrapping all of your content and your nav within one overarching div with a class of container it should solve this issue. Here are some points that validator.w3 found related to your site: https://validator.w3.org/nu/?doc=https%3A%2F%2Fjcit.info%2F I would check that link and make those changes.

Overall your site is well made, works and is visually appealing. Great job!

Your overall passing grade across all of your PWP Milestones is 34/40 points (85%).

* Milestone 1 - 20%: Tier IV 40(0.2) = 8
* Milestone 2a - 20%: Tier IV 40(0.2) = 8
* Milestone 2b - 10%: Tier III 30(0.1) = 3
* Milestone 3 - 50%: Tier III 30(0.5) = 15
