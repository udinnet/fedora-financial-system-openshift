<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title', 'Home'); ?>

<div class="row">
    <div class="span12">
        <h4>Get Involved</h4>
        <p>FFS runs on OpenShift, so it's really easy to run your own version.</p>
        <ol>
            <li><a href="http://openshift.redhat.com">Sign up for OpenShift</a> if you don't already have an account</li>
            <li>Create a new PHP application and add MySQL</li>
            <li>Clone the application repo: <code>git clone &lt;OpenShift git URL&gt;</code></li>
            <li>Change into the cloned directory</li>
            <li>Add the FFS repo: <code>git remote add ffs -m master http://github.com/udinnet/fedora-financial-system-openshift.git</code></li>
            <li>Pull: <code>git pull -s recursive -X theirs ffs master</code></li>
            <li>Push: <code>git push</code></li>
        </ol>
    </div>
</div>