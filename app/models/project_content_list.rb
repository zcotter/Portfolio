class ProjectContentList < ActiveRecord::Base
  attr_accessible :title
  belongs_to :project
  has_many :project_content_list_elements
end
