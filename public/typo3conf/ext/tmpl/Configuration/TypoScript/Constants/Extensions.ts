plugin.bootstrap_package.page {
    logo {
        # cat=bootstrap package: logo/110/100; type=string; label=Logo: Leave blank to use website title from template instead
        file = EXT:bootstrap_package/Resources/Public/Images/logo.png
        # cat=bootstrap package: logo/110/110; type=string; label=Logo Inverted: Leave blank to use website title from template instead
        fileInverted = EXT:bootstrap_package/Resources/Public/Images/logo.png
        # cat=bootstrap package: logo/110/120; type=int+; label=Height: The image will not be resized!
        height = 300
        # cat=bootstrap package: logo/110/130; type=int+; label=Width: The image will not be resized!
        width = 450
    }
    cookieconsent {
        # cat=bootstrap package: cookie consent/230/01_enable; type=boolean; label=Enable Cookie Consent: For more information about this solution please head over to https://cookieconsent.insites.com/
        enable = 0
    }

    breadcrumb {
        # cat=bootstrap package: navigation/162/breadcrumb_enable; type=boolean; label=Breadcrumb: Enable to display the breadcrumb
        enable = 1
        # cat=bootstrap package: navigation/162/breadcrumb_enableLevel; type=int+; label=Breadcrumb Enable Level: Enable breadcrumb menu is greater or equal this value
        enableLevel = 2
        icon {
            # cat=bootstrap package: navigation/162/breadcrumb_icon_enable; type=boolean; label=Breadcrumb Icon: Enable navigation icons in the breadcrumb
            enable = 0
            # cat=bootstrap package: navigation/162/breadcrumb_icon_width; type=int+; label=Breadcrumb Icon Width
            width = 16
            # cat=bootstrap package: navigation/162/breadcrumb_icon_height; type=int+; label=Breadcrumb Icon Height
            height = 16
        }
    }

    language {
        # cat=bootstrap package: language/168/language_enable; type=boolean; label=LanguageSection: Enable to display the LanguageSection at bottom
        enable = 0
    }

    copyright {
        # cat=bootstrap package: copyright/169/120; type=boolean; label=Copyright: Enable to display the copyright
        enable = 0
    }
}