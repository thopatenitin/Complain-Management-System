// JavaScript Document
function checkAddUserForm()
{
	with (window.document.frmAddUser) {
		if (isEmpty(txtUserName, 'Enter user name')) {
			return;
		} else if (isEmpty(txtPassword, 'Enter password')) {
			return;
		} else {
			submit();
		}
	}
}

function viewComplainDetail(compId)
{
	window.location.href = 'view.php?mod=Administrator&view=viewByCompID&compId='+compId;
}

function viewEmployeeComDetail(compId)
{
	window.location.href = 'view.php?mod=corporator&view=viewByCompID&compId='+compId;
}

function closeComplain(compId)
{
	window.location.href = 'view.php?mod=corporator&view=closeComplain&compId='+compId;
}


function changePassword(userId)
{
	window.location.href = 'index.php?view=modify&userId=' + userId;
}

function deleteEngg(eId)
{
	if (confirm('Do you want to delete this Engineer?')) {
		window.location.href = 'process.php?action=deleteEngg&eId=' + eId;
	}
}

function editEnggDetail(eId)
{
	var url = 'view.php?mod=Administrator&view=doEdit&eId=' + eId;
	//alert(url);
	window.location.href  = url;
}

function deleteCust(cId)
{
	if (confirm('Do you want to delete this Customer?')) {
		window.location.href = 'process.php?action=deleteCust&cId=' + cId;
	}
}

function editCustDetail(cId)
{
	var url = 'view.php?mod=Administrator&view=doEditCust&cId=' + cId;
	//alert(url);
	window.location.href  = url;
}

