<!DOCTYPE html>
<html>
<head>
	<title>Carti_Classes</title>
</head>
<body>

<?
class User {
	public $comments = [];
	public $grupa = "Administrator";
	public $user = "User1";
	protected $id = 2;
	private $pass = 12345;

	public function readComments(){
		return $this->comments;
	}

	public function postComment($id, $comment, $id_autor){
		echo 'Comentariu postat';
		$temp;
		$temp->id = $id;
		$temp->comment = $comment;
		$temp->id_autor = $id_autor;
		array_push($this->comments, $temp);
		return $this->comments;
	}
	public function delComment($comment_id, $id_autor){
		if ($id_autor === $this->user->id) {
			return $this->comments.foreach(($comm) => {
				if ($comm->id === $comment_id) {
					$this->comments.array_splice($key, 1);
				}
			});
		}
		return null;
	}

}
class Moderator extends User {
	public function delAdmCom(){
		return $this->comments;
	}
}

$user = new User();
$user->comments[0]->id = 1;
$user->comments[0]->comment = 'Comment1';
$user->comments[0]->id_autor = 10;
echo '<hr/>User = ' . $user->user;
echo '<hr/>User_ID = ' . $user->grupa;
echo '<hr/>Comments = ' . $user->comments[0]->comment;
$user->comments = $user->postComment(2, 'Comment2', 2);
if (isset($_GET['send']) == 2) {
   	$user->postComment(3, 'Comment3', 3);
}
if (isset($_GET['delete'])) {
   	$user->delComment(1, 1);
}
?>
<table border="2">
	<thead>
		<tr>
			<th>id</th>
			<th>Comment</th>
			<th>id_Author</th>			
		</tr>
	</thead>
	<tbody>
<?
echo '<hr/><hr>User1 = ' . $user->comments[0]->id_autor;

foreach ($user->comments as $comm) {?>
<tr>
			<td><?=$comm->id;?></td>
			<td><?=$comm->comment;?></td>
			<td><?=$comm->id_autor;?></td>		
		</tr>	
<?}
?>
</tbody>
</table>
	
		<button><a href="Lab_1_BackEnd.php?send=2">Submit</a></button>

</body>
</html>























