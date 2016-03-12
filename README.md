Recent Topics for phpBB 3.1
============

Extension for phpBB 3.1 to display recent topics.

![Screenshot](screenshot.png)

##### Based on NV Recent Topics for phpBB 3.0, by Joas Schilling ([nickvergessen](https://github.com/nickvergessen))


## Features
- Adds a list of recent (or unread) topics to the index page.
- ACP module to change:
  - number of topics to show
  - max. number of pages
  - set minimum topic type level to display (normal/sticky/announcement/global)
  - exclusion of topics (by ID)
  - display parent forums in the row
  - only show unread topics
  - sort by topic start time, instead of last post time
- UCP permissions and settings so users can choose their own preferences
- Inherits all styling from regular "viewforum" templates
- Tested on:
  - prosilver
  - subsilver2
  - PBWoW 3
  - PBTech
  - we_universal

#### Requirements
- phpBB 3.1.0 or higher
- PHP 5.3.3 or higher

#### Languages supported
- English
- German
- Spanish
- French
- Russian
- Greek
- Dutch
- Italian
- Japanese
- Swedish
- Estonian
- Persian
- Arabic
- Turkish
- Polish
- Romanian
- Croatian  
- Hungarian
- Danish       
  
#### To do list
- Add compatibility for topic prefixes and allow exclusion/inclusion based on predefined prefixes.
- Add option to have stickies/announcements at the top

### Changelog 
- 2.0.6-dev - 12/03/2016
  - [NEW] Croatian translation (Ancica) 
  - [NEW] Hungarian translation (aszilagyi)
  - [NEW] Estonian translation (phpBBeesti)
  - [NEW] Arabic translation (Alhitary)  
  - [NEW] Turkish translation (edipdincer)   
  - [NEW] Italian translation (Mauron)     
  - [FIX] Danish translation (jensz12)       
  - [UPD] French translation (Galixte)      
  - [FIX] #17 Mark topics as read when using the forum AJAX function, fixes issue (Kasimi)
  - [UPD] Japanese translation (momo-i)     
  
## Installation
1. [Download the latest release](https://github.com/sajaki/RecentTopics/releases) and unzip it.
2. Copy the entire contents from the unzipped folder to `/ext/paybas/recenttopics/`.
3. Navigate in the ACP to `Customise -> Manage extensions`.
4. Find `Recent Topics` under "Disabled Extensions" and click `Enable`.

## Uninstallation
1. Navigate in the ACP to `Customise -> Manage extensions`.
2. Click the `Disable` link for `Recent Topics`.
3. To permanently uninstall, click `Delete Data`, then delete the `recenttopics` folder from `/ext/paybas/`.

### License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)


© 2015 - PayBas
