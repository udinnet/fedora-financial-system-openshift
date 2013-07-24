FFS on OpenShift
====================
This project inherited from [old FFS project](https://github.com/udinnet/fedora-financial-system) and continuing the development as an Openshift application project.

### Get Involved

FFS runs on OpenShift, so it's really easy to run your own version.

1. [Sign up for OpenShift](http://openshift.redhat.com) if you don't already have an account
1. Create a new PHP application and add MySQL
1. Clone the application repo: `git clone <OpenShift git URL>`
1. Change into the cloned directory
1. Add the FFS repo: `git remote add ffs -m master http://github.com/udinnet/fedora-financial-system-openshift.git`
1. Pull: `git pull -s recursive -X theirs ffs master`
1. Push: `git push`
