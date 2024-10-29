Magento 2 Custom Module: Return Policy, Shipping Details & Click-n-Collect

Overview
The ReturnsInfo module adds three interactive font icons to the product details page of your Magento 2 store. These icons serve as links to pop-ups containing essential information about your return policy, nationwide shipping, and click-and-collect options. This module enhances the user experience by providing quick access to important details while browsing products.

Features
Three Font Icons:
Return Policy Info
Nationwide Shipping
Click-n-Collect

Pop-up Information:
Each icon opens a pop-up with relevant information.
The Return Policy and Shipping pop-ups include buttons that link to specific sections of the FAQs page.

Customizable:
Easily edit headings and text from the admin panel.
Customize images and prices to fit your business needs.

Installation
Directory Structure: Ensure the following directory structure exists in your Magento installation:
bash
Copy code
app/code/Gelmar/ReturnsInfo
If you prefer to use your own folder names, make sure to update the registration file and any other necessary files accordingly.

Upload Custom Image:
Replace the custom image in the shipping pop-up with your own image.
Upload your image to:
bash
Copy code
app/code/Gelmar/ReturnsInfo/view/frontend/web/images

Edit Configuration:
Open the system.xml file located in the module to configure the module settings in the admin panel.
You can enable/disable the module and edit the headings for the pop-ups (e.g., change "Return Policy Info" to something else).

Update Prices and Info:
Ensure to modify the prices based on your company's pricing model.
Edit the return policy and click-and-collect information in the appropriate files.

Admin Configuration
After installation, you can find the ReturnsInfo module in the admin panel under the specified tab. From here, you can:
Enable or disable the module.
Modify the headings for the icons easily.

Usage
Once installed and configured, the icons will appear on your product details page. Clicking each icon will display the relevant information in a pop-up. Users can quickly access your return policy, shipping details, and click-and-collect options, enhancing their shopping experience.

Contributions
Contributions are welcome! If you would like to improve this module or suggest new features, please feel free to submit a pull request.

License
This project is licensed under the MIT License.