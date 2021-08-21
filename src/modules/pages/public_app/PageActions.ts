import * as PageRepo from './Page.repository';
import * as PostRepo from './Post.respository';
import * as CommentRepo from './Comment.repository';

interface NewPageDTO {
  title: string;
  user: object;
  config: object;
}

export const userCreatePage = async (page_dto: NewPageDTO) => {
  const { title, user, config } = page_dto;
  const page_record = { title };
  const page = await PageRepo.createPage(page_record);
  // Create page mod record
  // create page config record

  return page;
};

interface NewPostDTO {
  title: string;
  content: string;
  user: object;
}

export const userCreatePagePost = async (post_dto: NewPostDTO) => {
  const { title, content, user } = post_dto;

  // @ts-ignore
  const post_record = { title, content, user_id: user.id };

  return PostRepo.createPost(post_record);
};

interface EditPostDTO {
  id: string;
  title: string;
  content: string;
  user: object;
}

export const userEditPagePost = async (post_dto: EditPostDTO) => {
  const { id, content, user } = post_dto;

  const existing_post = await PostRepo.findById(id);

  const post_record = { id, content, title: existing_post.title };

  const post = PostRepo.updatePost(post_record);

  return post;
};

interface NewCommentDTO {
  post_id: string;
  reference_id: string;
  content: string;
  user: object;
}

export const userCreatePostComment = async (comment_dto: NewCommentDTO) => {
  const { content, reference_id, post_id } = comment_dto;

  // @ts-ignore
  const comment_record = { post_id, content, user_id: user.id, reference_id };

  const comment = await CommentRepo.createComment(comment_record);

  return comment;
};
