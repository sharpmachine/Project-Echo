module ProjectsHelper
  
  def pluralize_without_count(singular, count, plural = nil)
    ((count == 1 || count =~ /^1(\.0+)?$/) ? singular : (plural || singular.pluralize))
  end
  
end
