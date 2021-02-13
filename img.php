

if(isset9$_post['btnsubmit']){
	imgname= _Files['fileupload']['name'];
	temp= _Files['fileupload']['tempname'];

	arrtype=array("jpg","png");
	ext= explode(".")