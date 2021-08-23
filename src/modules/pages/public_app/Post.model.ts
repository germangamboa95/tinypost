export interface PostRecord {
  id?: string;
  title: string;
  content: string;
  page_id: string
}

export const POST_TABLE = 'posts';
