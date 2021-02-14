# UnlimitedSubcategoriesOfCategory
A full CodeIgniter solution to generate and list all categories , sub categories and sub sub categories

## Included features
- As less database calls as possible
- As generic as possible (using a recursive function)
- As clean as possible


## Tools To build This Solution:
- CodeIgniter knowledge.
- PHP knowledge
- MySQL knowledge
- Html , Css , Js , Ajax knowledge
- Version Control (Git) Knowladge , For More Details please visit this link :
	- [Adding an existing project to GitHub using the command line](https://docs.github.com/en/github/importing-your-projects-to-github/adding-an-existing-project-to-github-using-the-command-line)

### Step 1: creating the table in MySQL.
Our table (named 'menus') will have only 4 fields...

- id (int) : Unique ID integer
- parent_id (int) : refers to the parent node id
- name (varchar) : the name of our menu
- level (int) : will determine the 'order' in which the subCategory-items will be shown (per level)

**Hint**: By using the level field, we can make to category-levels independent from the ID's in our table.


### Step 2: Once the above step is done, you can simply run this small demo by:

**http://yourserver/yourappname/index.php/menus**



