# ContentDM-Disqus
This script will overwrite the built-in comments function for ContentDM and replace it with the Disqus commenting system and is based on item level information

## Install
1) Replace the values for **disqus_shortname** and **baseDomain** within the script
* For shortname information, please review the Disqus documentation at https://help.disqus.com/customer/portal/articles/466208-what-s-a-shortname-
* The base domain is the root of the url that patrons go to when viewing collections

Example:
```java
var disqus_shortname = 'testing';
var baseDomain = 'example.cdmhost.com';
```
2) Save changes

3) Upload to the Bottom Custom Script of a collection within ContentDM that you would like the use Disqus Comments on. Alternatively, uploading to the entire instance is possible as well. 

## Warranty and Copyright
Copyright (C) 2015 Robert Nunez

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or any later version. 

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 

See the GNU General Public License for more details. You should have received a copy of the GNU General Public License along with this program. If not, see <http://www.gnu.org/licenses/>.
