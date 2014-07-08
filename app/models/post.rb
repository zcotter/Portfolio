class Post < ActiveRecord::Base
  has_many :post_photos
  validates_presence_of :published_on
end
