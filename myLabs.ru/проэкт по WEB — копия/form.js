const button = document.getElementById('input_btn');
button.addEventListener('click', updateButton);

function updateButton() {
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const text = document.getElementById('text').value;

  const li = document.createElement('li');
  li.className = 'comment';
  const user = document.createElement('p');
  user.className = 'comment_author';
  user.innerHTML = "Имя: " + name
  li.appendChild(user);

  const mail = document.createElement('p');
  mail.className = 'comment_email';
  mail.innerHTML = "Email: " + email
  li.appendChild(mail);

  const comment = document.createElement('p');
  comment.className = 'comment_text';
  comment.innerHTML = "Комментарий: " + text
  li.appendChild(comment);

  document.getElementById('comments').appendChild(li);
};
